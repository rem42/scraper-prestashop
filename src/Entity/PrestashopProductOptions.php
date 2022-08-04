<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopProductOptions
{
    /** @var array<int, PrestashopProductOption> */
    public array $productOptions = [];

    public function addProductOption(PrestashopProductOption $productOption): self
    {
        $this->productOptions[] = $productOption;

        return $this;
    }
}
