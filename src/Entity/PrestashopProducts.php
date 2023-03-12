<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopProducts
{
    /** @var array<int, PrestashopProduct> */
    public array $products = [];

    public function addProduct(PrestashopProduct $product): self
    {
        $this->products[] = $product;

        return $this;
    }
}
