<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '')]
class Advert
{
    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: '_id')]
    protected string $id = '';
    protected ?string $link = null;
    protected string $thumbnail = '';

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setLink(?string $link): void
    {
        $this->link = $link;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setThumbnail(string $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }
}
