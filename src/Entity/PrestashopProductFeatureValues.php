<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopProductFeatureValues
{
    /** @var array<int, PrestashopProductFeatureValue> */
    public array $productFeatureValues = [];

    public function addProductFeatureValue(PrestashopProductFeatureValue $productFeatureValue): self
    {
        $this->productFeatureValues[] = $productFeatureValue;

        return $this;
    }
}
