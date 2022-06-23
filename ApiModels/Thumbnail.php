<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '')]
class Thumbnail
{
    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: '_link')]
    protected string $link = '';
    protected int $width = 0;

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getWidth(): int
    {
        return $this->width;
    }
}
