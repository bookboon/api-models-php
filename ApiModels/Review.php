<?php

namespace Bookboon\ApiModels;

class Review implements \JsonSerializable
{
    protected string $author = '';
    protected ?Book $book = null;
    protected string $comment = '';
    protected ?\DateTime $created = null;
    protected int $rating = 0;

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

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setCreated(?\DateTime $created): void
    {
        $this->created = $created;
    }

    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function jsonSerialize(): array
    {
        $data = [];
        $data['author'] = $this->author;
        $data['book'] = $this->book;
        $data['comment'] = $this->comment;
        $data['created'] = isset($this->created) ? $this->created->format(\DATE_RFC3339) : null;
        $data['rating'] = $this->rating;
        return $data;
    }
}
