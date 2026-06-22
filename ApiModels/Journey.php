<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;
use Bookboon\JsonLDClient\Attributes\JsonLDProperty;

#[JsonLDEntity(url: '/v1/journeys')]
class Journey
{
    #[JsonLDProperty(mappedName: '_id')]
    protected string $id = '';

    /** @var Thumbnail[] $thumbnail */
    protected array $thumbnail = [];
    protected string $abstract = '';
    protected string $title = '';
    protected string $description = '';
    protected \DateTime $published;

    #[JsonLDProperty(mappedName: 'isFeatured')]
    protected bool $featured = false;
    protected Language $language;

    /** @var string[] $books */
    protected array $books = [];

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
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

    public function setAbstract(string $abstract): void
    {
        $this->abstract = $abstract;
    }

    public function getAbstract(): string
    {
        return $this->abstract;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setPublished(\DateTime $published): void
    {
        $this->published = $published;
    }

    public function getPublished(): \DateTime
    {
        return $this->published;
    }

    public function setFeatured(bool $featured): void
    {
        $this->featured = $featured;
    }

    public function isFeatured(): bool
    {
        return $this->featured;
    }

    public function setLanguage(Language $language): void
    {
        $this->language = $language;
    }

    public function getLanguage(): Language
    {
        return $this->language;
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

    public function __construct()
    {
        $this->published = new \DateTime();
        $this->language = new Language();
    }
}
