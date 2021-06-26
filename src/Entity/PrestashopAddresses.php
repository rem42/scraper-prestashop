<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopAddresses
{
    /** @var Collection<int, PrestashopAddress> */
    private Collection $addresses;

    /**
     * PrestashopAddresses constructor.
     */
    public function __construct()
    {
        $this->addresses = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopAddress>
     */
    public function getAddresses(): Collection
    {
        return $this->addresses;
    }

    public function addAddress(PrestashopAddress $address): self
    {
        $this->addresses->add($address);

        return $this;
    }

    public function removeAddress(PrestashopAddress $address): self
    {
        $this->addresses->removeElement($address);

        return $this;
    }
}
