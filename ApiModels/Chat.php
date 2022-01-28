<?php

namespace Bookboon\ApiModels;

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
