<?php

namespace Bookboon\ApiModels;

class Chat implements \JsonSerializable
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

    public function jsonSerialize(): array
    {
        $data = [];
        $data['roomPassword'] = $this->roomPassword;
        return $data;
    }
}
