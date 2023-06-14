<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopProductFeatures
{
    /** @var array<int, PrestashopProductFeature> */
    public array $productFeatures = [];

    public function addProductFeature(PrestashopProductFeature $productFeature): self
    {
        $this->productFeatures[] = $productFeature;

        return $this;
    }
}
