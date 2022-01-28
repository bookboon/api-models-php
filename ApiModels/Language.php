<?php

namespace Bookboon\ApiModels;

class Language
{
    protected ?string $slug = null;
    protected string $code = '';
    protected ?string $id = null;
    protected string $localizedName = '';
    protected string $name = '';

    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setLocalizedName(string $localizedName): void
    {
        $this->localizedName = $localizedName;
    }

    public function getLocalizedName(): string
    {
        return $this->localizedName;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
