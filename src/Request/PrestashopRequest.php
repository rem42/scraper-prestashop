<?php

namespace Scraper\ScraperPrestashop\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestAuthBasic;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\ScraperRequest;

/**
 * @Scraper(scheme="HTTPS", host="{host}", path="/api/{resource}/{id}")
 */
abstract class PrestashopRequest extends ScraperRequest implements RequestAuthBasic, RequestHeaders
{
    protected ?int $id = null;

    protected string $resource;
    private string $host;

    private string $key;

    public function __construct(string $host, string $key, string $resource)
    {
        $this->host     = $host;
        $this->key      = $key;
        $this->resource = $resource;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getAuthBasic(): string
    {
        return $this->key . ':';
    }

    public function getHeaders(): array
    {
        return [
            'Output-Format' => 'JSON',
            'Io-Format'     => 'JSON',
        ];
    }

    public function getResource(): string
    {
        return $this->resource;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
