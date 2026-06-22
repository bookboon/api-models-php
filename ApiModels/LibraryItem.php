<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;
use Bookboon\JsonLDClient\Attributes\JsonLDProperty;

#[JsonLDEntity(url: '/v1/user-data/library/items', singleton: true)]
class LibraryItem
{
    protected string $id = '';
    protected string $userId = '';
    protected string $bookId = '';
    protected float $progress = 0.0;
    protected ?string $origin = null;
    protected bool $reviewed = false;
    protected bool $hidden = false;

    #[JsonLDProperty(mappedName: 'isSaved')]
    protected bool $saved = false;
    protected \DateTime $createdAt;
    protected \DateTime $updatedAt;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setBookId(string $bookId): void
    {
        $this->bookId = $bookId;
    }

    public function getBookId(): string
    {
        return $this->bookId;
    }

    public function setProgress(float $progress): void
    {
        $this->progress = $progress;
    }

    public function getProgress(): float
    {
        return $this->progress;
    }

    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setReviewed(bool $reviewed): void
    {
        $this->reviewed = $reviewed;
    }

    public function getReviewed(): bool
    {
        return $this->reviewed;
    }

    public function setHidden(bool $hidden): void
    {
        $this->hidden = $hidden;
    }

    public function getHidden(): bool
    {
        return $this->hidden;
    }

    public function setSaved(bool $saved): void
    {
        $this->saved = $saved;
    }

    public function isSaved(): bool
    {
        return $this->saved;
    }

    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }
}
