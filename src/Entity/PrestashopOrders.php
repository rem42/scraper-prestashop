<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopOrders
{
    /** @var Collection<int, PrestashopOrder> */
    private Collection $orders;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopOrder>
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(PrestashopOrder $order): self
    {
        $this->orders->add($order);

        return $this;
    }

    public function removeOrder(PrestashopOrder $order): self
    {
        $this->orders->removeElement($order);

        return $this;
    }
}
