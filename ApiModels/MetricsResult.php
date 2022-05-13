<?php

namespace Bookboon\ApiModels;

class MetricsResult implements \JsonSerializable
{
    /** @var MetricsHeader[]|null $headers */
    protected ?array $headers = null;

    /** @var object[]|null $parameters */
    protected ?array $parameters = null;
    protected ?string $query = null;

    /** @var object[]|null $results */
    protected ?array $results = null;

    /**
     * @param MetricsHeader[]|null $headers
     */
    public function setHeaders(?array $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * @return MetricsHeader[]|null
     */
    public function getHeaders(): ?array
    {
        return $this->headers;
    }

    /**
     * @param object[]|null $parameters
     */
    public function setParameters(?array $parameters): void
    {
        $this->parameters = $parameters;
    }

    /**
     * @return object[]|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    public function setQuery(?string $query): void
    {
        $this->query = $query;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    /**
     * @param object[]|null $results
     */
    public function setResults(?array $results): void
    {
        $this->results = $results;
    }

    /**
     * @return object[]|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    public function jsonSerialize(): array
    {
        $data = [];
        $data['headers'] = $this->headers;
        $data['parameters'] = $this->parameters;
        $data['query'] = $this->query;
        $data['results'] = $this->results;
        return $data;
    }
}
