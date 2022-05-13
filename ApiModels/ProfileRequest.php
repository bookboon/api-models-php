<?php

namespace Bookboon\ApiModels;

class ProfileRequest implements \JsonSerializable
{
    protected ?string $alias = null;

    /** @var string[]|null $answer */
    protected ?array $answer = null;

    /** @var AttributeRequest[]|null $attributes */
    protected ?array $attributes = null;
    protected ?string $email = null;
    protected string $handle = '';
    protected ?string $rootSegment = null;

    public function setAlias(?string $alias): void
    {
        $this->alias = $alias;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string[]|null $answer
     */
    public function setAnswer(?array $answer): void
    {
        $this->answer = $answer;
    }

    /**
     * @return string[]|null
     */
    public function getAnswer(): ?array
    {
        return $this->answer;
    }

    /**
     * @param AttributeRequest[]|null $attributes
     */
    public function setAttributes(?array $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @return AttributeRequest[]|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setHandle(string $handle): void
    {
        $this->handle = $handle;
    }

    public function getHandle(): string
    {
        return $this->handle;
    }

    public function setRootSegment(?string $rootSegment): void
    {
        $this->rootSegment = $rootSegment;
    }

    public function getRootSegment(): ?string
    {
        return $this->rootSegment;
    }

    public function jsonSerialize(): array
    {
        $data = [];
        $data['alias'] = $this->alias;
        $data['answer'] = $this->answer;
        $data['attributes'] = $this->attributes;
        $data['email'] = $this->email;
        $data['handle'] = $this->handle;
        $data['rootSegment'] = $this->rootSegment;
        return $data;
    }
}
