<?php

namespace Bookboon\ApiModels\v2;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;
use Bookboon\JsonLDClient\Attributes\JsonLDProperty;

#[JsonLDEntity(url: '/v2/frontpage')]
class FrontpageV2
{
    #[JsonLDProperty(mappedName: '_id')]
    protected string $id = '';
    protected string $urlSlug = '';
    protected ?\DateTime $activeFrom = null;

    /** @var FrontpageBelt[]|null $belts */
    protected ?array $belts = null;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setUrlSlug(string $urlSlug): void
    {
        $this->urlSlug = $urlSlug;
    }

    public function getUrlSlug(): string
    {
        return $this->urlSlug;
    }

    public function setActiveFrom(?\DateTime $activeFrom): void
    {
        $this->activeFrom = $activeFrom;
    }

    public function getActiveFrom(): ?\DateTime
    {
        return $this->activeFrom;
    }

    /**
     * @param FrontpageBelt[]|null $belts
     */
    public function setBelts(?array $belts): void
    {
        $this->belts = $belts;
    }

    /**
     * @return FrontpageBelt[]|null
     */
    public function getBelts(): ?array
    {
        return $this->belts;
    }
}
