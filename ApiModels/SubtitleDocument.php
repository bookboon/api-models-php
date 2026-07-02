<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;

#[JsonLDEntity(url: '')]
class SubtitleDocument
{
    protected string $documentId = '';
    protected string $languageCode = '';

    public function setDocumentId(string $documentId): void
    {
        $this->documentId = $documentId;
    }

    public function getDocumentId(): string
    {
        return $this->documentId;
    }

    public function setLanguageCode(string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }
}
