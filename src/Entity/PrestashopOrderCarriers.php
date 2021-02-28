<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopOrderCarriers
{
    /** @var Collection<int, PrestashopOrderCarrier> */
    private Collection $orderCarriers;

    public function __construct()
    {
        $this->orderCarriers = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopOrderCarrier>
     */
    public function getOrderCarriers(): Collection
    {
        return $this->orderCarriers;
    }

    public function addOrderCarrier(PrestashopOrderCarrier $orderCarrier): self
    {
        $this->orderCarriers->add($orderCarrier);

        return $this;
    }

    public function removeOrderCarrier(PrestashopOrderCarrier $orderCarrier): self
    {
        $this->orderCarriers->removeElement($orderCarrier);

        return $this;
    }
}
