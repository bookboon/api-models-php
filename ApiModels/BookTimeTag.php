<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/v1/books/{bookId}/timetags')]
class BookTimeTag
{
    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: '_id')]
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
}
