<?php
declare(strict_types=1);

namespace Framework\Http;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

class Request implements ServerRequestInterface
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

    public function getParsedBody()
    {
        return $this->parsedBody;
    }

    public function withParsedBody($query): self
    {
        $new = clone $this;
        $new->parsedBody = $query;
        return $new;
    }

    public function getProtocolVersion(){ }

    public function withProtocolVersion($version){ }

    public function getHeaders(){ }

    public function hasHeader($name){ }

    public function getHeader($name){ }

    public function getHeaderLine($name){ }

    public function withHeader($name, $value){ }

    public function withAddedHeader($name, $value){ }

    public function withoutHeader($name){ }

    public function getBody(){ }

    public function withBody(StreamInterface $body){ }

    public function getRequestTarget(){ }

    public function withRequestTarget($requestTarget){ }

    public function getMethod(){ }

    public function withMethod($method){ }

    public function getUri(){ }

    public function withUri(UriInterface $uri, $preserveHost = false){ }

    public function getServerParams(){ }

    public function getCookieParams(){ }

    public function withCookieParams(array $cookies){ }

    public function getUploadedFiles(){ }

    public function withUploadedFiles(array $uploadedFiles){ }

    public function getAttributes(){ }

    public function getAttribute($name, $default = null){ }

    public function withAttribute($name, $value){ }

    public function withoutAttribute($name){ }
}