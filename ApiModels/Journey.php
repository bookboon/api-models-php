<?php

namespace Bookboon\ApiModels;

class Journey
{
    protected string $id = '';
    protected string $abstract = '';

    /** @var string[] $books */
    protected array $books = [];
    protected string $description = '';
    protected bool $featured = false;
    protected ?Language $language = null;
    protected ?\DateTime $published = null;

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

    public function setAbstract(string $abstract): void
    {
        $this->abstract = $abstract;
    }

    public function getAbstract(): string
    {
        return $this->abstract;
    }

    /**
     * @param string[] $books
     */
    public function setBooks(array $books): void
    {
        $this->books = $books;
    }

    /**
     * @return string[]
     */
    public function getBooks(): array
    {
        return $this->books;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setFeatured(bool $featured): void
    {
        $this->featured = $featured;
    }

    public function isFeatured(): bool
    {
        return $this->featured;
    }

    public function setLanguage(?Language $language): void
    {
        $this->language = $language;
    }

    public function getLanguage(): ?Language
    {
        return $this->language;
    }

    public function setPublished(?\DateTime $published): void
    {
        $this->published = $published;
    }

    public function getPublished(): ?\DateTime
    {
        return $this->published;
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
