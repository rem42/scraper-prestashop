<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopOrderHistories
{
    /** @var Collection<int, PrestashopOrderHistory> */
    private Collection $orderHistories;

    public function __construct()
    {
        $this->orderHistories = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopOrderHistory>
     */
    public function getOrderHistories(): Collection
    {
        return $this->orderHistories;
    }

    public function addOrderHistorie(PrestashopOrderHistory $orderHistorie): self
    {
        $this->orderHistories->add($orderHistorie);

        return $this;
    }

    public function removeOrderHistorie(PrestashopOrderHistory $orderHistorie): self
    {
        $this->orderHistories->removeElement($orderHistorie);

        return $this;
    }
}
