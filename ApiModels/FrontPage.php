<?php

namespace Bookboon\ApiModels;

class FrontPage implements \JsonSerializable
{
    protected string $slug = '';

    /** @var Book[] $books */
    protected array $books = [];
    protected string $title = '';

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

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function jsonSerialize(): array
    {
        $data = [];
        $data['_slug'] = $this->slug;
        $data['books'] = $this->books;
        $data['title'] = $this->title;
        return $data;
    }
}
