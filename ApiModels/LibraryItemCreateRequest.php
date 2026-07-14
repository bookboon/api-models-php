<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;
use Bookboon\JsonLDClient\Attributes\JsonLDProperty;

#[JsonLDEntity(url: '/v1/user-data/library/items', singleton: true)]
class LibraryItemCreateRequest
{
    protected string $bookId = '';

    #[JsonLDProperty(mappedName: 'isSaved')]
    protected ?bool $saved = null;
    protected ?string $origin = null;

    public function setBookId(string $bookId): void
    {
        $this->bookId = $bookId;
    }

    public function getBookId(): string
    {
        return $this->bookId;
    }

    public function setSaved(?bool $saved): void
    {
        $this->saved = $saved;
    }

    public function isSaved(): ?bool
    {
        return $this->saved;
    }

    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }
}
