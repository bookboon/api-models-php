<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;
use Bookboon\JsonLDClient\Attributes\JsonLDProperty;

#[JsonLDEntity(url: '/v1/user-data/learning-progress')]
class ContentItem
{
    protected string $bookId = '';
    protected float $progress = 0.0;

    #[JsonLDProperty(mappedName: 'isSaved')]
    protected bool $saved = false;
    protected ?string $origin = null;
    protected bool $reviewed = false;
    protected ?string $cfi = null;
    protected ?int $position = null;
    protected ?float $timeOffset = null;
    protected \DateTime $lastAccessedAt;
    protected ?Book $book = null;

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

    public function setSaved(bool $saved): void
    {
        $this->saved = $saved;
    }

    public function isSaved(): bool
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

    public function setReviewed(bool $reviewed): void
    {
        $this->reviewed = $reviewed;
    }

    public function getReviewed(): bool
    {
        return $this->reviewed;
    }

    public function setCfi(?string $cfi): void
    {
        $this->cfi = $cfi;
    }

    public function getCfi(): ?string
    {
        return $this->cfi;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setTimeOffset(?float $timeOffset): void
    {
        $this->timeOffset = $timeOffset;
    }

    public function getTimeOffset(): ?float
    {
        return $this->timeOffset;
    }

    public function setLastAccessedAt(\DateTime $lastAccessedAt): void
    {
        $this->lastAccessedAt = $lastAccessedAt;
    }

    public function getLastAccessedAt(): \DateTime
    {
        return $this->lastAccessedAt;
    }

    public function setBook(?Book $book): void
    {
        $this->book = $book;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }

    public function __construct()
    {
        $this->lastAccessedAt = new \DateTime();
    }
}
