<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopCarriers
{
    /** @var Collection<int, PrestashopCarrier> */
    private Collection $carriers;

    public function __construct()
    {
        $this->carriers = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopCarrier>
     */
    public function getCarriers(): Collection
    {
        return $this->carriers;
    }

    public function addCarrier(PrestashopCarrier $carrier): self
    {
        $this->carriers->add($carrier);

        return $this;
    }

    public function removeCarrier(PrestashopCarrier $carrier): self
    {
        $this->carriers->removeElement($carrier);

        return $this;
    }
}
