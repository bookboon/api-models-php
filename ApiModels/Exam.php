<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/v1/exams')]
class Exam
{
    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: '_id')]
    protected string $id = '';
    protected Book $book;
    protected Language $language;
    protected int $passScore = 0;
    protected int $questionsCount = 0;
    protected int $timeSeconds = 0;
    protected string $title = '';

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setBook(Book $book): void
    {
        $this->book = $book;
    }

    public function getBook(): Book
    {
        return $this->book;
    }

    public function setLanguage(Language $language): void
    {
        $this->language = $language;
    }

    public function getLanguage(): Language
    {
        return $this->language;
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

    public function setTimeSeconds(int $timeSeconds): void
    {
        $this->timeSeconds = $timeSeconds;
    }

    public function getTimeSeconds(): int
    {
        return $this->timeSeconds;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function __construct()
    {
        $this->book = new Book();
        $this->language = new Language();
    }
}
