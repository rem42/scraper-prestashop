<?php

namespace Scraper\ScraperPrestashop\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestQuery;

/**
 * @Scraper(method="GET")
 */
class PrestashopGetRequest extends PrestashopRequest implements RequestQuery
{
    private ?string $limit = null;

    /** @var array<string> */
    private array $display = [];

    /** @var array<string, string> */
    private array $filter = [];

    private bool $isDisplayFull = false;

    public function getQuery(): array
    {
        return array_merge(
            [],
            parent::getQuery(),
            $this->getLimit(),
            $this->getDisplay(),
            $this->getFilter(),
        );
    }

    public function enableDisplayFull(): self
    {
        $this->isDisplayFull = true;

        return $this;
    }

    public function setDisplay(string ...$display): self
    {
        $this->display = $display;

        return $this;
    }

    public function setLimit(?int $limit, ?int $offset = null): self
    {
        if ($offset) {
            $this->limit = $offset . ',' . $limit;
        } else {
            $this->limit = (string) $limit;
        }

        return $this;
    }

    public function addFilter(string $parameter, string $value): self
    {
        $this->filter['filter[' . $parameter . ']'] = $value;

        return $this;
    }

    /**
     * @return array<string, string>
     */
    private function getLimit(): array
    {
        if ($this->limit) {
            return [
                'limit' => $this->limit,
            ];
        }

        return [];
    }

    /**
     * @return array<string, string>
     */
    private function getDisplay(): array
    {
        if (!$this->id && $this->isDisplayFull) {
            return [
                'display' => 'full',
            ];
        }

        if (\count($this->display)) {
            return [
                'display' => '[' . implode(',', $this->display) . ']',
            ];
        }

        return [];
    }

    /**
     * @return array<string, string>
     */
    private function getFilter(): array
    {
        return $this->filter;
    }
}
