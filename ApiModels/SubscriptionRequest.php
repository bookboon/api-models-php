<?php

namespace Bookboon\ApiModels;

class SubscriptionRequest implements \JsonSerializable
{
    protected ?string $alias = null;
    protected string $email = '';
    protected bool $consented = false;

    public function setAlias(?string $alias): void
    {
        $this->alias = $alias;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setConsented(bool $consented): void
    {
        $this->consented = $consented;
    }

    public function hasConsented(): bool
    {
        return $this->consented;
    }

    public function jsonSerialize(): array
    {
        $data = [];
        $data['alias'] = $this->alias;
        $data['email'] = $this->email;
        $data['hasConsented'] = $this->consented;
        return $data;
    }
}
