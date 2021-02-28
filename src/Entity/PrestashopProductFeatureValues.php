<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopProductFeatureValues
{
    /** @var Collection<int, PrestashopProductFeatureValue> */
    private Collection $productFeatureValues;

    public function __construct()
    {
        $this->productFeatureValues = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopProductFeatureValue>
     */
    public function getProductFeatureValues(): Collection
    {
        return $this->productFeatureValues;
    }

    public function addProductFeatureValue(PrestashopProductFeatureValue $productFeatureValue): self
    {
        $this->productFeatureValues->add($productFeatureValue);

        return $this;
    }

    public function removeProductFeatureValue(PrestashopProductFeatureValue $productFeatureValue): self
    {
        $this->productFeatureValues->removeElement($productFeatureValue);

        return $this;
    }
}
