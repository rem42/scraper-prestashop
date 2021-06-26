<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopCarts
{
    /** @var Collection<int, PrestashopCart> */
    private Collection $carts;

    /**
     * @return Collection<int, PrestashopCart>
     */
    public function getCarts(): Collection
    {
        return $this->carts;
    }

    /**
     * @param array<PrestashopCart> $carts
     */
    public function setCarts(array $carts): self
    {
        $this->carts = new ArrayCollection($carts);

        return $this;
    }

    public function addCart(PrestashopCart $cart): self
    {
        $this->carts->add($cart);

        return $this;
    }
}
