<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '')]
class AttributeRequest
{
    protected string $name = '';
    protected string $value = '';

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
