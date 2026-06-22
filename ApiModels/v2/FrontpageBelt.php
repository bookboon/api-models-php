<?php

namespace Bookboon\ApiModels\v2;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;

#[JsonLDEntity(url: '')]
class FrontpageBelt
{
    protected string $type = '';
    protected ?string $headline = null;
    protected ?string $description = null;
    protected ?string $contentType = null;
    protected ?string $dataUrl = null;
    protected ?string $mediaUrl = null;

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setHeadline(?string $headline): void
    {
        $this->headline = $headline;
    }

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setContentType(?string $contentType): void
    {
        $this->contentType = $contentType;
    }

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setDataUrl(?string $dataUrl): void
    {
        $this->dataUrl = $dataUrl;
    }

    public function getDataUrl(): ?string
    {
        return $this->dataUrl;
    }

    public function setMediaUrl(?string $mediaUrl): void
    {
        $this->mediaUrl = $mediaUrl;
    }

    public function getMediaUrl(): ?string
    {
        return $this->mediaUrl;
    }
}
