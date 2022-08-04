<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderStates
{
    /** @var array<int, PrestashopOrderState> */
    public array $orderStates = [];

    public function addOrderState(PrestashopOrderState $orderState): self
    {
        $this->orderStates[] = $orderState;

        return $this;
    }
}
