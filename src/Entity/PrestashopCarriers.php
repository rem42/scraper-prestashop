<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCarriers
{
    /** @var array<int, PrestashopCarrier> */
    public array $carriers = [];

    public function addCarrier(PrestashopCarrier $carrier): self
    {
        $this->carriers[] = $carrier;

        return $this;
    }
}
