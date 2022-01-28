<?php

namespace Bookboon\ApiModels;

class ReviewRequest
{
    protected ?string $author = null;
    protected ?string $comment = null;
    protected ?string $email = null;
    protected ?string $handle = null;
    protected int $rating = 0;

    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    public function getHandle(): ?string
    {
        return $this->handle;
    }

    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    public function getRating(): int
    {
        return $this->rating;
    }
}
