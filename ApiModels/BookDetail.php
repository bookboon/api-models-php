<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;

#[JsonLDEntity(url: '/v1/books/{bookId}/details')]
class BookDetail
{
    protected string $title = '';
    protected string $body = '';

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    public function getBody(): string
    {
        return $this->body;
    }
}
