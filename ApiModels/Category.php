<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;
use Bookboon\JsonLDClient\Attributes\JsonLDProperty;

#[JsonLDEntity(url: '/v1/categories')]
class Category
{
    #[JsonLDProperty(mappedName: '_id')]
    protected string $id = '';

    #[JsonLDProperty(mappedName: '_slug')]
    protected string $slug = '';
    protected string $homepage = '';
    protected string $title = '';
    protected string $name = '';
    protected string $seoTitle = '';
    protected string $description = '';

    /** @var object[] $categories */
    protected array $categories = [];

    /** @var Book[] $books */
    protected array $books = [];

    /** @var Thumbnail[] $thumbnail */
    protected array $thumbnail = [];
    protected bool $showInNavigation = false;
    protected ?string $icon = null;
    protected ?string $colour = null;
    protected ?string $desaturatedColour = null;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setHomepage(string $homepage): void
    {
        $this->homepage = $homepage;
    }

    public function getHomepage(): string
    {
        return $this->homepage;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setSeoTitle(string $seoTitle): void
    {
        $this->seoTitle = $seoTitle;
    }

    public function getSeoTitle(): string
    {
        return $this->seoTitle;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param object[] $categories
     */
    public function setCategories(array $categories): void
    {
        $this->categories = $categories;
    }

    /**
     * @return object[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param Book[] $books
     */
    public function setBooks(array $books): void
    {
        $this->books = $books;
    }

    /**
     * @return Book[]
     */
    public function getBooks(): array
    {
        return $this->books;
    }

    /**
     * @param Thumbnail[] $thumbnail
     */
    public function setThumbnail(array $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return Thumbnail[]
     */
    public function getThumbnail(): array
    {
        return $this->thumbnail;
    }

    public function setShowInNavigation(bool $showInNavigation): void
    {
        $this->showInNavigation = $showInNavigation;
    }

    public function getShowInNavigation(): bool
    {
        return $this->showInNavigation;
    }

    public function setIcon(?string $icon): void
    {
        $this->icon = $icon;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setColour(?string $colour): void
    {
        $this->colour = $colour;
    }

    public function getColour(): ?string
    {
        return $this->colour;
    }

    public function setDesaturatedColour(?string $desaturatedColour): void
    {
        $this->desaturatedColour = $desaturatedColour;
    }

    public function getDesaturatedColour(): ?string
    {
        return $this->desaturatedColour;
    }
}
