<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopProducts
{
    /** @var Collection<int, PrestashopProduct> */
    private Collection $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopProduct>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(PrestashopProduct $product): self
    {
        $this->products->add($product);

        return $this;
    }

    public function removeProduct(PrestashopProduct $product): self
    {
        $this->products->removeElement($product);

        return $this;
    }
}
