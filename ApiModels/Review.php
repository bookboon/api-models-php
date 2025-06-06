<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/v1/reviews')]
class Review
{
    protected string $author = '';
    protected ?Book $book = null;
    protected ?string $comment = null;
    protected \DateTime $created;
    protected string $id = '';
    protected int $rating = 0;
    protected ?string $userId = null;

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setBook(?Book $book): void
    {
        $this->book = $book;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setCreated(\DateTime $created): void
    {
        $this->created = $created;
    }

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function __construct()
    {
        $this->created = new \DateTime();
    }
}
