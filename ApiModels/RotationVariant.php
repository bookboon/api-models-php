<?php

namespace Bookboon\ApiModels;

class RotationVariant implements \JsonSerializable
{
    protected string $id = '';

    /** @var Advert[] $adverts */
    protected array $adverts = [];

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param Advert[] $adverts
     */
    public function setAdverts(array $adverts): void
    {
        $this->adverts = $adverts;
    }

    /**
     * @return Advert[]
     */
    public function getAdverts(): array
    {
        return $this->adverts;
    }

    public function jsonSerialize(): array
    {
        $data = [];
        $data['_id'] = $this->id;
        $data['adverts'] = $this->adverts;
        return $data;
    }
}
