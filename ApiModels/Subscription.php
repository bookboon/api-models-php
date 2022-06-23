<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/v1/subscriptions', singleton: true)]
class Subscription
{
    protected string $message = '';

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
