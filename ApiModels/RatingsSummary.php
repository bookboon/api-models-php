<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '')]
class RatingsSummary
{
    protected float $averageRating = 0.0;

    /** @var Rating[]|null $ratings */
    protected ?array $ratings = null;
    protected int $totalReviews = 0;

    public function setAverageRating(float $averageRating): void
    {
        $this->averageRating = $averageRating;
    }

    public function getAverageRating(): float
    {
        return $this->averageRating;
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

    public function setTotalReviews(int $totalReviews): void
    {
        $this->totalReviews = $totalReviews;
    }

    public function getTotalReviews(): int
    {
        return $this->totalReviews;
    }
}
