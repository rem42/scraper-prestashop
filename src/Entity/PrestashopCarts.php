<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCarts
{
    /** @var array<int, PrestashopCart> */
    public array $carts = [];

    public function addCart(PrestashopCart $cart): self
    {
        $this->carts[] = $cart;

        return $this;
    }
}
