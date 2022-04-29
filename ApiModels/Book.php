<?php

namespace Bookboon\ApiModels;

class Book
{
    protected string $id = '';
    protected string $slug = '';
    protected string $type = '';
    protected ?string $abstract = null;
    protected ?string $authors = null;

    /** @var string[]|null $categories */
    protected ?array $categories = null;
    protected ?string $context = null;

    /** @var BookDetail[]|null $details */
    protected ?array $details = null;
    protected ?bool $doNotInsertAdverts = null;
    protected ?int $durationSeconds = null;
    protected ?int $edition = null;

    /** @var string[]|null $formats */
    protected ?array $formats = null;
    protected ?string $homepage = null;
    protected ?string $isbn = null;
    protected ?Language $language = null;
    protected ?\DateTime $liveUtcTime = null;
    protected ?int $pages = null;
    protected ?bool $premium = null;
    protected ?int $premiumLevel = null;
    protected string $priceLevel = '';
    protected ?\DateTime $published = null;
    protected ?Rating $rating = null;

    /** @var Review[]|null $reviews */
    protected ?array $reviews = null;

    /** @var Book[]|null $similar */
    protected ?array $similar = null;
    protected ?string $subtitle = null;

    /** @var Thumbnail[]|null $thumbnail */
    protected ?array $thumbnail = null;
    protected string $title = '';
    protected ?int $version = null;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setAbstract(?string $abstract): void
    {
        $this->abstract = $abstract;
    }

    public function getAbstract(): ?string
    {
        return $this->abstract;
    }

    public function setAuthors(?string $authors): void
    {
        $this->authors = $authors;
    }

    public function getAuthors(): ?string
    {
        return $this->authors;
    }

    /**
     * @param string[]|null $categories
     */
    public function setCategories(?array $categories): void
    {
        $this->categories = $categories;
    }

    /**
     * @return string[]|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    public function setContext(?string $context): void
    {
        $this->context = $context;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    /**
     * @param BookDetail[]|null $details
     */
    public function setDetails(?array $details): void
    {
        $this->details = $details;
    }

    /**
     * @return BookDetail[]|null
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

    public function setDoNotInsertAdverts(?bool $doNotInsertAdverts): void
    {
        $this->doNotInsertAdverts = $doNotInsertAdverts;
    }

    public function getDoNotInsertAdverts(): ?bool
    {
        return $this->doNotInsertAdverts;
    }

    public function setDurationSeconds(?int $durationSeconds): void
    {
        $this->durationSeconds = $durationSeconds;
    }

    public function getDurationSeconds(): ?int
    {
        return $this->durationSeconds;
    }

    public function setEdition(?int $edition): void
    {
        $this->edition = $edition;
    }

    public function getEdition(): ?int
    {
        return $this->edition;
    }

    /**
     * @param string[]|null $formats
     */
    public function setFormats(?array $formats): void
    {
        $this->formats = $formats;
    }

    /**
     * @return string[]|null
     */
    public function getFormats(): ?array
    {
        return $this->formats;
    }

    public function setHomepage(?string $homepage): void
    {
        $this->homepage = $homepage;
    }

    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    public function setIsbn(?string $isbn): void
    {
        $this->isbn = $isbn;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setLanguage(?Language $language): void
    {
        $this->language = $language;
    }

    public function getLanguage(): ?Language
    {
        return $this->language;
    }

    public function setLiveUtcTime(?\DateTime $liveUtcTime): void
    {
        $this->liveUtcTime = $liveUtcTime;
    }

    public function getLiveUtcTime(): ?\DateTime
    {
        return $this->liveUtcTime;
    }

    public function setPages(?int $pages): void
    {
        $this->pages = $pages;
    }

    public function getPages(): ?int
    {
        return $this->pages;
    }

    public function setPremium(?bool $premium): void
    {
        $this->premium = $premium;
    }

    public function getPremium(): ?bool
    {
        return $this->premium;
    }

    public function setPremiumLevel(?int $premiumLevel): void
    {
        $this->premiumLevel = $premiumLevel;
    }

    public function getPremiumLevel(): ?int
    {
        return $this->premiumLevel;
    }

    public function setPriceLevel(string $priceLevel): void
    {
        $this->priceLevel = $priceLevel;
    }

    public function getPriceLevel(): string
    {
        return $this->priceLevel;
    }

    public function setPublished(?\DateTime $published): void
    {
        $this->published = $published;
    }

    public function getPublished(): ?\DateTime
    {
        return $this->published;
    }

    public function setRating(?Rating $rating): void
    {
        $this->rating = $rating;
    }

    public function getRating(): ?Rating
    {
        return $this->rating;
    }

    /**
     * @param Review[]|null $reviews
     */
    public function setReviews(?array $reviews): void
    {
        $this->reviews = $reviews;
    }

    /**
     * @return Review[]|null
     */
    public function getReviews(): ?array
    {
        return $this->reviews;
    }

    /**
     * @param Book[]|null $similar
     */
    public function setSimilar(?array $similar): void
    {
        $this->similar = $similar;
    }

    /**
     * @return Book[]|null
     */
    public function getSimilar(): ?array
    {
        return $this->similar;
    }

    public function setSubtitle(?string $subtitle): void
    {
        $this->subtitle = $subtitle;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    /**
     * @param Thumbnail[]|null $thumbnail
     */
    public function setThumbnail(?array $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return Thumbnail[]|null
     */
    public function getThumbnail(): ?array
    {
        return $this->thumbnail;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function getVersion(): ?int
    {
        return $this->version;
    }
}
