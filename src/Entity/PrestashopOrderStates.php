<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopOrderStates
{
    /** @var Collection<int, PrestashopOrderState> */
    private Collection $orderStates;

    public function __construct()
    {
        $this->orderStates = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopOrderState>
     */
    public function getOrderStates(): Collection
    {
        return $this->orderStates;
    }

    public function addOrderState(PrestashopOrderState $orderState): self
    {
        $this->orderStates->add($orderState);

        return $this;
    }

    public function removeOrderState(PrestashopOrderState $orderState): self
    {
        $this->orderStates->removeElement($orderState);

        return $this;
    }
}
