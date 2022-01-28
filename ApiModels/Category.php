<?php

namespace Bookboon\ApiModels;

class Category
{
    protected string $id = '';
    protected string $slug = '';

    /** @var Book[] $books */
    protected array $books = [];

    /** @var Category[] $categories */
    protected array $categories = [];
    protected string $description = '';
    protected string $homepage = '';
    protected string $name = '';
    protected string $seoTitle = '';

    /** @var Thumbnail[] $thumbnail */
    protected array $thumbnail = [];
    protected string $title = '';

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
     * @param Category[] $categories
     */
    public function setCategories(array $categories): void
    {
        $this->categories = $categories;
    }

    /**
     * @return Category[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setHomepage(string $homepage): void
    {
        $this->homepage = $homepage;
    }

    public function getHomepage(): string
    {
        return $this->homepage;
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

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
