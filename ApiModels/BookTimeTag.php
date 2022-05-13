<?php

namespace Bookboon\ApiModels;

class BookTimeTag implements \JsonSerializable
{
    protected string $id = '';
    protected string $name = '';
    protected int $offset = 0;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function jsonSerialize(): array
    {
        $data = [];
        $data['_id'] = $this->id;
        $data['name'] = $this->name;
        $data['offset'] = $this->offset;
        return $data;
    }
}
