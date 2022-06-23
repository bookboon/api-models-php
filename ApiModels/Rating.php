<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '')]
class Rating
{
    protected float $average = 0.0;
    protected int $count = 0;

    public function setAverage(float $average): void
    {
        $this->average = $average;
    }

    public function getAverage(): float
    {
        return $this->average;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
