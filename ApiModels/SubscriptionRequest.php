<?php

namespace Bookboon\ApiModels;

class SubscriptionRequest
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
}
