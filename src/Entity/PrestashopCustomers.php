<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopCustomers
{
    /** @var Collection<int, PrestashopCustomer> */
    private Collection $customers;

    public function __construct()
    {
        $this->customers = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopCustomer>
     */
    public function getCustomers(): Collection
    {
        return $this->customers;
    }

    public function addCustomer(PrestashopCustomer $customer): self
    {
        $this->customers->add($customer);

        return $this;
    }

    public function removeCustomer(PrestashopCustomer $customer): self
    {
        $this->customers->removeElement($customer);

        return $this;
    }
}
