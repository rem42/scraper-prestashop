<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopAddresses
{
    /** @var array<int, PrestashopAddress> */
    public array $addresses = [];

    public function addAddress(PrestashopAddress $address): self
    {
        $this->addresses[] = $address;

        return $this;
    }
}
