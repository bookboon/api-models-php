<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;
use Bookboon\JsonLDClient\Attributes\JsonLDProperty;

#[JsonLDEntity(url: '/v1/exams')]
class Exam
{
    #[JsonLDProperty(mappedName: '_id')]
    protected string $id = '';
    protected int $timeSeconds = 0;
    protected int $passScore = 0;
    protected int $questionsCount = 0;
    protected string $title = '';
    protected Language $language;
    protected Book $book;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setTimeSeconds(int $timeSeconds): void
    {
        $this->timeSeconds = $timeSeconds;
    }

    public function getTimeSeconds(): int
    {
        return $this->timeSeconds;
    }

    public function setPassScore(int $passScore): void
    {
        $this->passScore = $passScore;
    }

    public function getPassScore(): int
    {
        return $this->passScore;
    }

    public function setQuestionsCount(int $questionsCount): void
    {
        $this->questionsCount = $questionsCount;
    }

    public function getQuestionsCount(): int
    {
        return $this->questionsCount;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setLanguage(Language $language): void
    {
        $this->language = $language;
    }

    public function getLanguage(): Language
    {
        return $this->language;
    }

    public function setBook(Book $book): void
    {
        $this->book = $book;
    }

    public function getBook(): Book
    {
        return $this->book;
    }

    public function __construct()
    {
        $this->language = new Language();
        $this->book = new Book();
    }
}
