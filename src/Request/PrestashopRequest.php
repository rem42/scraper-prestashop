<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Request;

use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestAuthBasic;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\RequestQuery;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(scheme: Scheme::HTTPS, host: '{host}', path: '/api/{resource}/{id}')]
abstract class PrestashopRequest extends ScraperRequest implements RequestAuthBasic, RequestHeaders, RequestQuery
{
    protected ?int $id = null;

    protected string $resource;
    private string $host;

    private string $key;
    private array $query = [];

    public function __construct(string $host, string $key, string $resource)
    {
        $this->host = $host;
        $this->key = $key;
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

    public function getQuery(): array
    {
        return $this->query;
    }

    public function addQuery(string $key, string $value): self
    {
        $this->query[$key] = $value;

        return $this;
    }

    public function getHeaders(): array
    {
        return [
            'Output-Format' => 'JSON',
            'Io-Format' => 'JSON',
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

    public function useKeyInQuery(): self
    {
        $this->query['ws_key'] = $this->key;

        return $this;
    }
}
