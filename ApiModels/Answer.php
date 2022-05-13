<?php

namespace Bookboon\ApiModels;

class Answer implements \JsonSerializable
{
    protected string $id = '';
    protected string $text = '';

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function jsonSerialize(): array
    {
        $data = [];
        $data['id'] = $this->id;
        $data['text'] = $this->text;
        return $data;
    }
}
