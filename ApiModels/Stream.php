<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;
use Bookboon\JsonLDClient\Attributes\JsonLDProperty;

#[JsonLDEntity(url: '/v1/books/{bookId}/stream', singleton: true)]
class Stream
{
    protected string $streamUrl = '';
    protected ?string $brandingBeforeUrl = null;
    protected ?string $brandingAfterUrl = null;
    protected ?string $thumbnail = null;
    protected ?string $streamSecret = null;

    #[JsonLDProperty(mappedName: 'isLive')]
    protected bool $live = false;
    protected ?Chat $chat = null;

    public function setStreamUrl(string $streamUrl): void
    {
        $this->streamUrl = $streamUrl;
    }

    public function getStreamUrl(): string
    {
        return $this->streamUrl;
    }

    public function setBrandingBeforeUrl(?string $brandingBeforeUrl): void
    {
        $this->brandingBeforeUrl = $brandingBeforeUrl;
    }

    public function getBrandingBeforeUrl(): ?string
    {
        return $this->brandingBeforeUrl;
    }

    public function setBrandingAfterUrl(?string $brandingAfterUrl): void
    {
        $this->brandingAfterUrl = $brandingAfterUrl;
    }

    public function getBrandingAfterUrl(): ?string
    {
        return $this->brandingAfterUrl;
    }

    public function setThumbnail(?string $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setStreamSecret(?string $streamSecret): void
    {
        $this->streamSecret = $streamSecret;
    }

    public function getStreamSecret(): ?string
    {
        return $this->streamSecret;
    }

    public function setLive(bool $live): void
    {
        $this->live = $live;
    }

    public function isLive(): bool
    {
        return $this->live;
    }

    public function setChat(?Chat $chat): void
    {
        $this->chat = $chat;
    }

    public function getChat(): ?Chat
    {
        return $this->chat;
    }
}
