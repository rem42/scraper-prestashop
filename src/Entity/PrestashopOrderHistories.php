<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderHistories
{
    /** @var array<int, PrestashopOrderHistory> */
    public array $orderHistories = [];

    public function addOrderHistorie(PrestashopOrderHistory $orderHistorie): self
    {
        $this->orderHistories[] = $orderHistorie;

        return $this;
    }
}
