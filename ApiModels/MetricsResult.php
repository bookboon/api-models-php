<?php

namespace Bookboon\ApiModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '/v2/metrics/query', singleton: true)]
class MetricsResult
{
    /** @var MetricsHeader[]|null $headers */
    protected ?array $headers = null;
    protected array $parameters = [];
    protected string $query = '';

    /** @var array[]|null $results */
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

    public function setParameters(array $parameters): void
    {
        $this->parameters = $parameters;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function setQuery(string $query): void
    {
        $this->query = $query;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @param array[]|null $results
     */
    public function setResults(?array $results): void
    {
        $this->results = $results;
    }

    /**
     * @return array[]|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }
}
