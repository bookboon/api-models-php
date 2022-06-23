<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/v1/books/{bookId}/chapters')]
class BookChapter
{
    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: '_id')]
    protected string $id = '';
    protected int $duration = 0;
    protected int $position = 0;
    protected string $title = '';

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
