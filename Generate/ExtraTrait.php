<?php

declare(strict_types = 1);

namespace Bookboon\ApiModels\Generate;

use Popo\Schema\Property\Property;

trait ExtraTrait
{
    protected function isNullable(Property $property) : bool
    {
        $extra = $property->getExtra();
        return is_array($extra) ? $extra['nullable'] : false;
    }

    protected function getArrayType(Property $property) : string
    {
        $extra = $property->getExtra();
        return $extra['arrayType'] ?? '';
    }
}