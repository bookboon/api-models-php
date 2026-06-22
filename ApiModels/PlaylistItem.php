<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;

#[JsonLDEntity(url: '/v1/playlists/{id}/items')]
class PlaylistItem
{
    protected string $bookId = '';
    protected ?Book $book = null;

    public function setBookId(string $bookId): void
    {
        $this->bookId = $bookId;
    }

    public function getBookId(): string
    {
        return $this->bookId;
    }

    public function setBook(?Book $book): void
    {
        $this->book = $book;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }
}
