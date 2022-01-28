<?php

namespace Bookboon\ApiModels;

class Stream
{
    protected ?string $brandingAfterUrl = null;
    protected ?string $brandingBeforeUrl = null;
    protected ?Chat $chat = null;
    protected bool $live = false;
    protected ?string $streamSecret = null;
    protected string $streamUrl = '';
    protected ?string $thumbnail = null;

    public function setBrandingAfterUrl(?string $brandingAfterUrl): void
    {
        $this->brandingAfterUrl = $brandingAfterUrl;
    }

    public function getBrandingAfterUrl(): ?string
    {
        return $this->brandingAfterUrl;
    }

    public function setBrandingBeforeUrl(?string $brandingBeforeUrl): void
    {
        $this->brandingBeforeUrl = $brandingBeforeUrl;
    }

    public function getBrandingBeforeUrl(): ?string
    {
        return $this->brandingBeforeUrl;
    }

    public function setChat(?Chat $chat): void
    {
        $this->chat = $chat;
    }

    public function getChat(): ?Chat
    {
        return $this->chat;
    }

    public function setLive(bool $live): void
    {
        $this->live = $live;
    }

    public function isLive(): bool
    {
        return $this->live;
    }

    public function setStreamSecret(?string $streamSecret): void
    {
        $this->streamSecret = $streamSecret;
    }

    public function getStreamSecret(): ?string
    {
        return $this->streamSecret;
    }

    public function setStreamUrl(string $streamUrl): void
    {
        $this->streamUrl = $streamUrl;
    }

    public function getStreamUrl(): string
    {
        return $this->streamUrl;
    }

    public function setThumbnail(?string $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }
}
