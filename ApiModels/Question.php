<?php

namespace Bookboon\ApiModels;

class Question implements \JsonSerializable
{
    /** @var Answer[] $answers */
    protected array $answers = [];
    protected string $question = '';

    /**
     * @param Answer[] $answers
     */
    public function setAnswers(array $answers): void
    {
        $this->answers = $answers;
    }

    /**
     * @return Answer[]
     */
    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function setQuestion(string $question): void
    {
        $this->question = $question;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function jsonSerialize(): array
    {
        $data = [];
        $data['answers'] = $this->answers;
        $data['question'] = $this->question;
        return $data;
    }
}
