<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/v1/authors')]
class Author
{
    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: '_id')]
    protected string $id = '';

    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: '_slug')]
    protected ?string $slug = null;
    protected ?int $articleCount = null;
    protected ?int $audioCount = null;
    protected ?int $bookCount = null;

    /** @var string[]|null $bookTypes */
    protected ?array $bookTypes = null;

    /** @var Book[]|null $books */
    protected ?array $books = null;

    /** @var string[]|null $categories */
    protected ?array $categories = null;
    protected ?string $country = null;
    protected ?string $expertTitle = null;
    protected ?string $institution = null;

    /** @var string[]|null $languages */
    protected ?array $languages = null;
    protected ?string $linkedin = null;
    protected string $name = '';
    protected ?int $pdfCount = null;
    protected ?string $profileImage = null;
    protected ?string $profileText = null;

    /** @var Thumbnail[]|null $thumbnail */
    protected ?array $thumbnail = null;
    protected string $title = '';
    protected ?string $twitter = null;
    protected ?int $videoCount = null;
    protected ?string $website = null;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setArticleCount(?int $articleCount): void
    {
        $this->articleCount = $articleCount;
    }

    public function getArticleCount(): ?int
    {
        return $this->articleCount;
    }

    public function setAudioCount(?int $audioCount): void
    {
        $this->audioCount = $audioCount;
    }

    public function getAudioCount(): ?int
    {
        return $this->audioCount;
    }

    public function setBookCount(?int $bookCount): void
    {
        $this->bookCount = $bookCount;
    }

    public function getBookCount(): ?int
    {
        return $this->bookCount;
    }

    /**
     * @param string[]|null $bookTypes
     */
    public function setBookTypes(?array $bookTypes): void
    {
        $this->bookTypes = $bookTypes;
    }

    /**
     * @return string[]|null
     */
    public function getBookTypes(): ?array
    {
        return $this->bookTypes;
    }

    /**
     * @param Book[]|null $books
     */
    public function setBooks(?array $books): void
    {
        $this->books = $books;
    }

    /**
     * @return Book[]|null
     */
    public function getBooks(): ?array
    {
        return $this->books;
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

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setExpertTitle(?string $expertTitle): void
    {
        $this->expertTitle = $expertTitle;
    }

    public function getExpertTitle(): ?string
    {
        return $this->expertTitle;
    }

    public function setInstitution(?string $institution): void
    {
        $this->institution = $institution;
    }

    public function getInstitution(): ?string
    {
        return $this->institution;
    }

    /**
     * @param string[]|null $languages
     */
    public function setLanguages(?array $languages): void
    {
        $this->languages = $languages;
    }

    /**
     * @return string[]|null
     */
    public function getLanguages(): ?array
    {
        return $this->languages;
    }

    public function setLinkedin(?string $linkedin): void
    {
        $this->linkedin = $linkedin;
    }

    public function getLinkedin(): ?string
    {
        return $this->linkedin;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setPdfCount(?int $pdfCount): void
    {
        $this->pdfCount = $pdfCount;
    }

    public function getPdfCount(): ?int
    {
        return $this->pdfCount;
    }

    public function setProfileImage(?string $profileImage): void
    {
        $this->profileImage = $profileImage;
    }

    public function getProfileImage(): ?string
    {
        return $this->profileImage;
    }

    public function setProfileText(?string $profileText): void
    {
        $this->profileText = $profileText;
    }

    public function getProfileText(): ?string
    {
        return $this->profileText;
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

    public function setTwitter(?string $twitter): void
    {
        $this->twitter = $twitter;
    }

    public function getTwitter(): ?string
    {
        return $this->twitter;
    }

    public function setVideoCount(?int $videoCount): void
    {
        $this->videoCount = $videoCount;
    }

    public function getVideoCount(): ?int
    {
        return $this->videoCount;
    }

    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }
}
