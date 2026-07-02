<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;
use Bookboon\JsonLDClient\Attributes\JsonLDProperty;

#[JsonLDEntity(url: '/v1/books')]
class Book
{
    #[JsonLDProperty(mappedName: '_id')]
    protected string $id = '';

    #[JsonLDProperty(mappedName: '_type')]
    protected string $type = '';

    #[JsonLDProperty(mappedName: '_slug')]
    protected string $slug = '';
    protected ?string $homepage = null;
    protected string $title = '';
    protected ?string $subtitle = null;

    /** @var SubtitleDocument[]|null $subtitleDocuments */
    protected ?array $subtitleDocuments = null;
    protected ?int $version = null;
    protected ?string $abstract = null;
    protected \DateTime $published;
    protected ?bool $premium = null;
    protected ?int $premiumLevel = null;
    protected ?bool $doNotInsertAdverts = null;
    protected string $priceLevel = '';
    protected ?int $edition = null;
    protected ?int $durationSeconds = null;
    protected ?int $pages = null;
    protected ?string $isbn = null;

    /** @var string[]|null $categories */
    protected ?array $categories = null;
    protected Language $language;

    /** @var string[]|null $formats */
    protected ?array $formats = null;
    protected ?string $authors = null;

    /** @var Author[]|null $authorsDetail */
    protected ?array $authorsDetail = null;
    protected ?string $context = null;

    /** @var Thumbnail[]|null $thumbnail */
    protected ?array $thumbnail = null;
    protected ?Rating $rating = null;
    protected ?RatingsSummary $ratingsSummary = null;
    protected ?int $likeCount = null;
    protected ?int $commentCount = null;
    protected ?int $viewCount = null;
    protected ?bool $userHasLiked = null;
    protected ?bool $accessible = null;
    protected ?\DateTime $liveUtcTime = null;

    /** @var Review[]|null $reviews */
    protected ?array $reviews = null;

    /** @var BookDetail[]|null $details */
    protected ?array $details = null;

    /** @var Book[]|null $similar */
    protected ?array $similar = null;
    protected string $skillLevel = '';
    protected ?string $state = null;
    protected ?Book $parent = null;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setHomepage(?string $homepage): void
    {
        $this->homepage = $homepage;
    }

    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
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
     * @param SubtitleDocument[]|null $subtitleDocuments
     */
    public function setSubtitleDocuments(?array $subtitleDocuments): void
    {
        $this->subtitleDocuments = $subtitleDocuments;
    }

    /**
     * @return SubtitleDocument[]|null
     */
    public function getSubtitleDocuments(): ?array
    {
        return $this->subtitleDocuments;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setAbstract(?string $abstract): void
    {
        $this->abstract = $abstract;
    }

    public function getAbstract(): ?string
    {
        return $this->abstract;
    }

    public function setPublished(\DateTime $published): void
    {
        $this->published = $published;
    }

    public function getPublished(): \DateTime
    {
        return $this->published;
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

    public function setDoNotInsertAdverts(?bool $doNotInsertAdverts): void
    {
        $this->doNotInsertAdverts = $doNotInsertAdverts;
    }

    public function getDoNotInsertAdverts(): ?bool
    {
        return $this->doNotInsertAdverts;
    }

    public function setPriceLevel(string $priceLevel): void
    {
        $this->priceLevel = $priceLevel;
    }

    public function getPriceLevel(): string
    {
        return $this->priceLevel;
    }

    public function setEdition(?int $edition): void
    {
        $this->edition = $edition;
    }

    public function getEdition(): ?int
    {
        return $this->edition;
    }

    public function setDurationSeconds(?int $durationSeconds): void
    {
        $this->durationSeconds = $durationSeconds;
    }

    public function getDurationSeconds(): ?int
    {
        return $this->durationSeconds;
    }

    public function setPages(?int $pages): void
    {
        $this->pages = $pages;
    }

    public function getPages(): ?int
    {
        return $this->pages;
    }

    public function setIsbn(?string $isbn): void
    {
        $this->isbn = $isbn;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
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

    public function setLanguage(Language $language): void
    {
        $this->language = $language;
    }

    public function getLanguage(): Language
    {
        return $this->language;
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

    public function setAuthors(?string $authors): void
    {
        $this->authors = $authors;
    }

    public function getAuthors(): ?string
    {
        return $this->authors;
    }

    /**
     * @param Author[]|null $authorsDetail
     */
    public function setAuthorsDetail(?array $authorsDetail): void
    {
        $this->authorsDetail = $authorsDetail;
    }

    /**
     * @return Author[]|null
     */
    public function getAuthorsDetail(): ?array
    {
        return $this->authorsDetail;
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

    public function setRating(?Rating $rating): void
    {
        $this->rating = $rating;
    }

    public function getRating(): ?Rating
    {
        return $this->rating;
    }

    public function setRatingsSummary(?RatingsSummary $ratingsSummary): void
    {
        $this->ratingsSummary = $ratingsSummary;
    }

    public function getRatingsSummary(): ?RatingsSummary
    {
        return $this->ratingsSummary;
    }

    public function setLikeCount(?int $likeCount): void
    {
        $this->likeCount = $likeCount;
    }

    public function getLikeCount(): ?int
    {
        return $this->likeCount;
    }

    public function setCommentCount(?int $commentCount): void
    {
        $this->commentCount = $commentCount;
    }

    public function getCommentCount(): ?int
    {
        return $this->commentCount;
    }

    public function setViewCount(?int $viewCount): void
    {
        $this->viewCount = $viewCount;
    }

    public function getViewCount(): ?int
    {
        return $this->viewCount;
    }

    public function setUserHasLiked(?bool $userHasLiked): void
    {
        $this->userHasLiked = $userHasLiked;
    }

    public function getUserHasLiked(): ?bool
    {
        return $this->userHasLiked;
    }

    public function setAccessible(?bool $accessible): void
    {
        $this->accessible = $accessible;
    }

    public function getAccessible(): ?bool
    {
        return $this->accessible;
    }

    public function setLiveUtcTime(?\DateTime $liveUtcTime): void
    {
        $this->liveUtcTime = $liveUtcTime;
    }

    public function getLiveUtcTime(): ?\DateTime
    {
        return $this->liveUtcTime;
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

    public function setSkillLevel(string $skillLevel): void
    {
        $this->skillLevel = $skillLevel;
    }

    public function getSkillLevel(): string
    {
        return $this->skillLevel;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setParent(?Book $parent): void
    {
        $this->parent = $parent;
    }

    public function getParent(): ?Book
    {
        return $this->parent;
    }

    public function __construct()
    {
        $this->published = new \DateTime();
        $this->language = new Language();
    }
}
