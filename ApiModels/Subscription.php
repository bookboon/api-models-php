<?php

namespace Bookboon\ApiModels;

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
