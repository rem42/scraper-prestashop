<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrders
{
    /** @var array<int, PrestashopOrder> */
    public array $orders = [];

    public function addOrder(PrestashopOrder $order): self
    {
        $this->orders[] = $order;

        return $this;
    }
}
