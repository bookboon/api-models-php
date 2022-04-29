<?php

namespace Bookboon\ApiModels\Generate;

use Nette\PhpGenerator\Literal;
use Popo\Plugin\BuilderPluginInterface;
use Popo\Plugin\PropertyPluginInterface;
use Popo\Schema\Property\Property;

class BookboonDefinePropertyPlugin implements PropertyPluginInterface
{
    use ExtraTrait;

    public function run(BuilderPluginInterface $builder, Property $property): void
    {
        $value = $property->getDefault();
        $nullable = $this->isNullable($property);

        if ($builder->getSchemaInspector()->isPopoProperty($property->getType()) ||
            $builder->getSchemaInspector()->isDateTimeProperty($property->getType())) {
            $value = null;
            $nullable = true;
        }
        else {
            if ($builder->getSchemaInspector()->isLiteral($property->getDefault())) {
                $value = new Literal($property->getDefault());
            }
        }

        if ($value === null && $builder->getSchemaInspector()->isArray($property->getType())) {
            $value = [];
        }

        if (!$nullable && $builder->getSchemaGenerator()->generatePopoType($builder->getSchema(), $property) === 'bool') {
            $value = false;
        }

        if (!$nullable && $builder->getSchemaGenerator()->generatePopoType($builder->getSchema(), $property) === 'string') {
            $value = '';
        }

        if (!$nullable && $builder->getSchemaGenerator()->generatePopoType($builder->getSchema(), $property) === 'int') {
            $value = 0;
        }

        if (!$nullable && $builder->getSchemaGenerator()->generatePopoType($builder->getSchema(), $property) === 'float') {
            $value = 0.0;
        }
        $comment = '';
        if ($this->getArrayType($property)) {
            $comment = "@var array<{$this->getArrayType($property)}>";
        }

        $builder->getClass()
            ->addProperty($property->getName(), $value)
            ->setProtected()
            ->setNullable($nullable)
            ->setType($builder->getSchemaGenerator()->generatePopoType($builder->getSchema(), $property))
            ->setComment($comment . $property->getComment());
    }
}
