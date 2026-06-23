<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;

#[JsonLDEntity(url: '')]
class RatingsSummary
{
    protected float $averageRating = 0.0;
    protected int $totalReviews = 0;

    /** @var Rating[]|null $ratings */
    protected ?array $ratings = null;

    public function setAverageRating(float $averageRating): void
    {
        $this->averageRating = $averageRating;
    }

    public function getAverageRating(): float
    {
        return $this->averageRating;
    }

    public function setTotalReviews(int $totalReviews): void
    {
        $this->totalReviews = $totalReviews;
    }

    public function getTotalReviews(): int
    {
        return $this->totalReviews;
    }

    /**
     * @param Rating[]|null $ratings
     */
    public function setRatings(?array $ratings): void
    {
        $this->ratings = $ratings;
    }

    /**
     * @return Rating[]|null
     */
    public function getRatings(): ?array
    {
        return $this->ratings;
    }
}
