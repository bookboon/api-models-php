<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '')]
class Chat
{
    protected string $roomPassword = '';

    public function setRoomPassword(string $roomPassword): void
    {
        $this->roomPassword = $roomPassword;
    }

    public function getRoomPassword(): string
    {
        return $this->roomPassword;
    }
}
