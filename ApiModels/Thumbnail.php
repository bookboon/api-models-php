<?php

namespace Bookboon\ApiModels;

class Thumbnail implements \JsonSerializable
{
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

    public function jsonSerialize(): array
    {
        $data = [];
        $data['_link'] = $this->link;
        $data['width'] = $this->width;
        return $data;
    }
}
