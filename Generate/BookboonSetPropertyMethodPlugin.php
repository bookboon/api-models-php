<?php

declare(strict_types = 1);

namespace Bookboon\ApiModels\Generate;

use Popo\Plugin\BuilderPluginInterface;
use Popo\Plugin\PropertyPluginInterface;
use Popo\Schema\Property\Property;

class BookboonSetPropertyMethodPlugin implements PropertyPluginInterface
{
    use ExtraTrait;

    public function run(BuilderPluginInterface $builder, Property $property): void
    {
        $method = $builder->getClass()
            ->addMethod('set' . ucfirst($property->getName()))
            ->setComment($property->getComment())
            ->setPublic()
            ->setReturnType('void')
            ->setBody(
                sprintf(
                    '$this->%s = $%s;',
                    $property->getName(),
                    $property->getName(),
                )
            );

        $nullable = $this->isNullable($property);
        if ($builder->getSchemaInspector()->isPopoProperty($property->getType()) ||
            $builder->getSchemaInspector()->isDateTimeProperty($property->getType())) {
            $nullable = true;
        }

        $method
            ->addParameter($property->getName())
            ->setType($builder->getSchemaGenerator()->generatePopoType($builder->getSchema(), $property))
            ->setNullable($nullable);
    }
}
