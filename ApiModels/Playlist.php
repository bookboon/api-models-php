<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;

#[JsonLDEntity(url: '/v1/playlists')]
class Playlist
{
    protected string $id = '';
    protected string $ownerId = '';
    protected string $title = '';
    protected ?string $description = null;
    protected ?string $coverImageUrl = null;
    protected int $itemsTotal = 0;

    /** @var string[]|null $sharedWith */
    protected ?array $sharedWith = null;
    protected \DateTime $createdAt;
    protected \DateTime $updatedAt;
    protected ?\DateTime $deletedAt = null;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setOwnerId(string $ownerId): void
    {
        $this->ownerId = $ownerId;
    }

    public function getOwnerId(): string
    {
        return $this->ownerId;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setCoverImageUrl(?string $coverImageUrl): void
    {
        $this->coverImageUrl = $coverImageUrl;
    }

    public function getCoverImageUrl(): ?string
    {
        return $this->coverImageUrl;
    }

    public function setItemsTotal(int $itemsTotal): void
    {
        $this->itemsTotal = $itemsTotal;
    }

    public function getItemsTotal(): int
    {
        return $this->itemsTotal;
    }

    /**
     * @param string[]|null $sharedWith
     */
    public function setSharedWith(?array $sharedWith): void
    {
        $this->sharedWith = $sharedWith;
    }

    /**
     * @return string[]|null
     */
    public function getSharedWith(): ?array
    {
        return $this->sharedWith;
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

    public function setDeletedAt(?\DateTime $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }
}
