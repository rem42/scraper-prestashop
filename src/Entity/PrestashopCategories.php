<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCategories
{
    /** @var array<int, PrestashopCategory> */
    public array $categories = [];

    public function addCategory(PrestashopCategory $category): self
    {
        $this->categories[] = $category;

        return $this;
    }
}
