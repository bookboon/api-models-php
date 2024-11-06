<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/v1/authors')]
class Author
{
    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: '_id')]
    protected string $id = '';

    #[\Bookboon\JsonLDClient\Attributes\JsonLDProperty(mappedName: '_slug')]
    protected ?string $slug = null;
    protected ?int $bookCount = null;

    /** @var Book[]|null $books */
    protected ?array $books = null;
    protected ?string $country = null;
    protected ?string $institution = null;
    protected ?string $linkedin = null;
    protected string $name = '';
    protected ?string $profileImage = null;
    protected ?string $profileText = null;

    /** @var Thumbnail[]|null $thumbnail */
    protected ?array $thumbnail = null;
    protected string $title = '';
    protected ?string $twitter = null;
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

    public function setBookCount(?int $bookCount): void
    {
        $this->bookCount = $bookCount;
    }

    public function getBookCount(): ?int
    {
        return $this->bookCount;
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

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setInstitution(?string $institution): void
    {
        $this->institution = $institution;
    }

    public function getInstitution(): ?string
    {
        return $this->institution;
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

    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }
}
