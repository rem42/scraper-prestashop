<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderCarriers
{
    /** @var array<int, PrestashopOrderCarrier> */
    public array $orderCarriers = [];

    public function addOrderCarrier(PrestashopOrderCarrier $orderCarrier): self
    {
        $this->orderCarriers[] = $orderCarrier;

        return $this;
    }
}
