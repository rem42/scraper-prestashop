<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopProductOptions
{
    /** @var Collection<int, PrestashopProductOption> */
    private Collection $productOptions;

    public function __construct()
    {
        $this->productOptions = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopProductOption>
     */
    public function getProductOptions(): Collection
    {
        return $this->productOptions;
    }

    public function addProductOption(PrestashopProductOption $productOption): self
    {
        $this->productOptions->add($productOption);

        return $this;
    }

    public function removeProductOption(PrestashopProductOption $productOption): self
    {
        $this->productOptions->removeElement($productOption);

        return $this;
    }
}
