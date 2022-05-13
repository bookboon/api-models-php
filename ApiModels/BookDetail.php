<?php

namespace Bookboon\ApiModels;

class BookDetail implements \JsonSerializable
{
    protected string $body = '';
    protected string $title = '';

    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    public function getBody(): string
    {
        return $this->body;
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
        $data['body'] = $this->body;
        $data['title'] = $this->title;
        return $data;
    }
}
