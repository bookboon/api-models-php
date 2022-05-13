<?php

namespace Bookboon\ApiModels;

class MetricsHeader implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $type = null;

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function jsonSerialize(): array
    {
        $data = [];
        $data['name'] = $this->name;
        $data['type'] = $this->type;
        return $data;
    }
}
