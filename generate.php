<?php

require __DIR__ . '/vendor/autoload.php';

use Bookboon\ApiModels\Generate\BookboonDefinePropertyPlugin;
use Bookboon\ApiModels\Generate\BookboonGetPropertyMethodPlugin;
use Bookboon\ApiModels\Generate\BookboonSetPropertyMethodPlugin;
use cebe\openapi\Reader;
use cebe\openapi\spec\Reference;
use cebe\openapi\spec\Schema;
use Popo\Plugin\ClassPlugin\ExtendClassPlugin;
use Popo\PopoConfigurator;
use Popo\PopoFacade;

$idVar = '$id';
$openapi = Reader::readFromYamlFile('https://staging.api.stage.bookboon.io/api/v1/openapi.yaml');
$models = [];
$paths = [];
$pathGuessed = [];
$namespace = 'Bookboon\ApiModels';
$outputPath = './ApiModels/';


function addModel(Schema|Reference $model, array &$models, bool $subObject = false): string
{
    $idVar = '$id';
    if (!isset($model->getSerializableData()->$idVar)) {
        return '';
    }

    $modelName = $model->getSerializableData()->$idVar;

    if (!isset($models[$modelName]) || !$subObject) {
        $models[$modelName] = ["schema" => $model, 'renamed_properties' => [], 'aliases' => []];
    }

    if (isset($model->properties['@type'])) {
        $type = $model->properties['@type'];

        if (!empty($type->enum)) {
            foreach ($type->enum as $alias) {
                $models[$modelName]['aliases'][] = $alias;
            }
        }

        // We check here that the pattern has no actual regexp stuff in it
        // TODO: support regexp types (?)
        if (!empty($type->pattern)
            && $type->pattern != $modelName
            && preg_match('/^[\w\d_]{3,}$/', $type->pattern)
        ) {
            if (strnatcasecmp($type->pattern, $modelName) === 0) {
                $models[$type->pattern] = $models[$modelName];
                unset($models[$modelName]);
                $modelName = $type->pattern;
            } else {
                $models[$modelName]['aliases'][] = $type->pattern;
            }
        }
    }

    if (!$subObject) {
        foreach ($model->properties as $property) {
            $propertyArr = $property->getSerializableData();

            if (isset($propertyArr->type) && $propertyArr->type === 'object') {
                addModel($property, $models, true);
            }
            if (isset($propertyArr->type) && $propertyArr->type === 'array') {
                $prop = $property->items;
                if (isset($prop->type) && $prop->type === 'object' && count($prop->properties) !== 0) {
                    addModel($property->items, $models, true);
                }
            }
        }
    }

    return $modelName;
}

foreach ($openapi->paths as $path => $pathObj) {
    foreach ($pathObj->getOperations() as $method => $operation) {
        $contents = [];
        if (isset($operation->responses[200])) {
            $contents[] = $operation->responses[200]->content;
        }

        if (isset($operation->requestBody)) {
            $contents[] = $operation->requestBody->content;
        }

        foreach ($contents as $content) {
            $jsonOrAny = $content['application/json'] ?? $content['*/*'] ?? null;
            $singular = false;

            if (isset($jsonOrAny->schema) && $jsonOrAny->schema->type == "array") {
                $model = $jsonOrAny->schema->items;
                $modelName = addModel($model, $models);
            }

            if (isset($jsonOrAny) && $jsonOrAny->schema->type == "object") {
                $model = $jsonOrAny->schema;
                $modelName = addModel($model, $models);
                $singular = true;
            }

            if (!empty($modelName)) {
                $isGuess = false;
                $prevPath = $paths[$modelName] ?? null;

                $segs = explode('/', rtrim($path, '/'));
                // if we have a path to retrieve a single object that ends with a parameter, that's probably
                // an ID parameter, and we strip it off to get a collection path for JSONLD
                if ($singular && $method == 'get' && preg_match('/^{.*}$/',  end($segs))) {
                    array_pop($segs);
                    $path = implode('/', $segs);
                    $isGuess = true;
                }

                $wasGuess = $pathGuessed[$modelName] ?? false;
                // use the shortest path -- it's a guess, but it works
                if (empty($prevPath) ||
                    count($segs) < count(explode('/', $prevPath)) ||
                    $wasGuess && !$isGuess
                ) {
                    $paths[$modelName] = $path;
                    $pathGuessed[$modelName] = $isGuess;
                }
            }
        }
    }
}

$schema = [
    '$' => [
        'config' => [
            'namespace' => $namespace,
            'namespaceRoot' => $namespace,
            'outputPath' => $outputPath
        ]
    ],
    'Models' => []
];

$config = [
    'jsonldclient' => [
        'mappings' => []
    ]
];

$mappings = [];

foreach ($models as $modelName => &$modelInfo) {
    if ($modelName === '') {
        continue;
    }

    $model = $modelInfo['schema'];
    $classProperties = [];

    foreach ($model->properties as $name => $property) {
        if ($name[0] === '@') {
            continue;
        }

        if ($name[0] === '_') {
            $newName = substr($name, 1);
            $modelInfo['renamed_properties'][$newName] = $name;
            $name = $newName;
        }

        $propertyArr = $property->getSerializableData();
        $mapping = ['name' => $name, 'extra' => ['nullable' => $propertyArr->nullable ?? false], 'type' => null];

        switch ($property->type) {
            case 'string':
                $mapping['type'] = 'string';
                break;
            case 'integer':
                $mapping['type'] = 'int';
                break;
            case 'number':
                $mapping['type'] = 'float';
                break;
            case 'boolean':
                $mapping['type'] = 'bool';
                break;
            case 'array':
                $mapping['type'] = 'array';
                $mapping['extra']['arrayType'] = $propertyArr->items->$idVar ?? $propertyArr->items->type ?? null;
                break;
            case 'object':
                $mapping['type'] = 'popo';
                $mapping['default'] = $propertyArr->$idVar;
                break;
            default:
                //throw new \Exception("Unknown type: {$property->type}");
                continue 2; //TODO: Dont silently ignore
        }

        $classProperties[] = $mapping;
    }

    foreach ($modelInfo['aliases'] as $alias) {
        if (!isset($schema['Models'][$alias])) {
            $schema['Models'][$alias] = ['config' => ['extend' => "$namespace\\$modelName"]];
        }
    }

    $path = $paths[$modelName] ?? '';

    if (!empty($path)) {
        $mapping = ['type' => "$namespace\\$modelName", 'uri' => "%env(BOOKBOON_API_HOST)%$path"];
        if (!empty($modelInfo['renamed_properties'])) {
            $mapping['renamed_properties'] = $modelInfo['renamed_properties'];
        }

        $mappings[] = $mapping;

        foreach ($modelInfo['aliases'] as $alias) {
            $aliasMapping = $mapping;
            $aliasMapping['type'] = "$namespace\\$alias";
            $mappings[] = $aliasMapping;
        }
    }

    $schema['Models'][$modelName] = ['property' => $classProperties];
}

$config['jsonldclient']['mappings'] = $mappings;
$yaml = Symfony\Component\Yaml\Yaml::dump($schema, 4);
$specFile = 'popo_spec.yaml';
file_put_contents($specFile, $yaml);

$configurator = (new PopoConfigurator)
    ->setSchemaPath($specFile)
    ->setClassPluginCollection([ExtendClassPlugin::class])
    ->setPropertyPluginCollection([
        BookboonDefinePropertyPlugin::class,
        BookboonSetPropertyMethodPlugin::class,
        BookboonGetPropertyMethodPlugin::class,
    ]);

$facade = new PopoFacade();
$facade->generate($configurator);

unlink($specFile);

$configYaml = Symfony\Component\Yaml\Yaml::dump($config, 5);
file_put_contents("config.yaml", $configYaml);
