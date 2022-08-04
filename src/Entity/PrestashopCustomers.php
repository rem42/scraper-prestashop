<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCustomers
{
    /** @var array<int, PrestashopCustomer> */
    public array $customers = [];

    public function addCustomer(PrestashopCustomer $customer): self
    {
        $this->customers[] = $customer;

        return $this;
    }
}
