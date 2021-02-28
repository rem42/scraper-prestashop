<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopProductOptionValues
{
    /** @var Collection<int, PrestashopProductOptionValue> */
    private Collection $productOptionValues;

    public function __construct()
    {
        $this->productOptionValues = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopProductOptionValue>
     */
    public function getProductOptionValues(): Collection
    {
        return $this->productOptionValues;
    }

    public function addProductOptionValue(PrestashopProductOptionValue $productOptionValue): self
    {
        $this->productOptionValues->add($productOptionValue);

        return $this;
    }

    public function removeProductOptionValue(PrestashopProductOptionValue $productOptionValue): self
    {
        $this->productOptionValues->removeElement($productOptionValue);

        return $this;
    }
}
