<?php

namespace Bookboon\ApiModels;

class AttributeRequest implements \JsonSerializable
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

    public function jsonSerialize(): array
    {
        $data = [];
        $data['name'] = $this->name;
        $data['value'] = $this->value;
        return $data;
    }
}
