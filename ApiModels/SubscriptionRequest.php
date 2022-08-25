<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/v1/subscriptions', singleton: true)]
class SubscriptionRequest
{
    protected ?string $alias = null;
    protected string $email = '';

    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: 'hasConsented')]
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
