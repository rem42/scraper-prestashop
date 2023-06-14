<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCombinations
{
    /** @var array<int, PrestashopCombination> */
    public array $combinations = [];

    public function addCombination(PrestashopCombination $combination): self
    {
        $this->combinations[] = $combination;

        return $this;
    }
}
