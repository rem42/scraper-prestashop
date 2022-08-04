<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopProductOptionValues
{
    /** @var array<int, PrestashopProductOptionValue> */
    public array $productOptionValues = [];

    public function addProductOptionValue(PrestashopProductOptionValue $productOptionValue): self
    {
        $this->productOptionValues[] = $productOptionValue;

        return $this;
    }
}
