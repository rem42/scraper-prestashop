<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopProductFeatures
{
    /** @var Collection<int, PrestashopProductFeature> */
    private Collection $productFeatures;

    public function __construct()
    {
        $this->productFeatures = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopProductFeature>
     */
    public function getProductFeatures(): Collection
    {
        return $this->productFeatures;
    }

    public function addProductFeature(PrestashopProductFeature $productFeature): self
    {
        $this->productFeatures->add($productFeature);

        return $this;
    }

    public function removeProductFeature(PrestashopProductFeature $productFeature): self
    {
        $this->productFeatures->removeElement($productFeature);

        return $this;
    }
}
