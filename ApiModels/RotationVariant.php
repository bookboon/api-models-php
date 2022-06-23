<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/v1/rotations')]
class RotationVariant
{
    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: '_id')]
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
}
