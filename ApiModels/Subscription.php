<?php

namespace Bookboon\ApiModels;

class Subscription implements \JsonSerializable
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

    public function jsonSerialize(): array
    {
        $data = [];
        $data['message'] = $this->message;
        return $data;
    }
}
