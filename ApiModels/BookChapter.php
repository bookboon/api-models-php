<?php

namespace Bookboon\ApiModels;

class BookChapter implements \JsonSerializable
{
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

    public function jsonSerialize(): array
    {
        $data = [];
        $data['_id'] = $this->id;
        $data['duration'] = $this->duration;
        $data['position'] = $this->position;
        $data['title'] = $this->title;
        return $data;
    }
}
