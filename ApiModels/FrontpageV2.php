<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/v2/metrics/export')]
class FrontpageV2
{
    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: '_id')]
    protected string $id = '';
    protected ?\DateTime $activeFrom = null;

    /** @var FrontpageBelt[]|null $belts */
    protected ?array $belts = null;
    protected string $urlSlug = '';

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
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

    public function setUrlSlug(string $urlSlug): void
    {
        $this->urlSlug = $urlSlug;
    }

    public function getUrlSlug(): string
    {
        return $this->urlSlug;
    }
}
