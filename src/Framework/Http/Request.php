<?php
declare(strict_types=1);

namespace Framework\Http;

class Request
{
    private array $queryParams;
    private ?array $parsedBody;

    public function __construct(array $queryParams = [], array $parsedBody = null)
    {

        $this->queryParams = $queryParams;
        $this->parsedBody = $parsedBody;
    }

    public function getQueryParams(): array
    {
            return $this->queryParams;
    }

    public function withQueryParams(array $query): self
    {
        $new = clone $this;
        $new->queryParams = $query;
        return $new;
    }

    public function getParsedBody(): ?array
    {
        return $this->parsedBody;
    }

    public function withParsedBody(array $query): self
    {
        $new = clone $this;
        $new->parsedBody = $query;
        return $new;
    }

}