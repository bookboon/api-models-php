<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;
use Bookboon\JsonLDClient\Attributes\JsonLDProperty;

#[JsonLDEntity(url: '/v1/user-data/library/items/{bookId}', singleton: true)]
class LibraryItemUpdateRequest
{
    protected ?float $progress = null;
    protected ?string $cfi = null;
    protected ?int $position = null;
    protected ?float $timeOffset = null;

    #[JsonLDProperty(mappedName: 'isSaved')]
    protected ?bool $saved = null;

    public function setProgress(?float $progress): void
    {
        $this->progress = $progress;
    }

    public function getProgress(): ?float
    {
        return $this->progress;
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

    public function setSaved(?bool $saved): void
    {
        $this->saved = $saved;
    }

    public function isSaved(): ?bool
    {
        return $this->saved;
    }
}
