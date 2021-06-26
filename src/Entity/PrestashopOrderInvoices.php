<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopOrderInvoices
{
    /** @var Collection<int, PrestashopOrderInvoice> */
    private Collection $orderInvoices;

    public function __construct()
    {
        $this->orderInvoices = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopOrderInvoice>
     */
    public function getOrderInvoices(): Collection
    {
        return $this->orderInvoices;
    }

    public function addOrderInvoice(PrestashopOrderInvoice $orderInvoice): self
    {
        $this->orderInvoices->add($orderInvoice);

        return $this;
    }

    public function removeOrderInvoice(PrestashopOrderInvoice $orderInvoice): self
    {
        $this->orderInvoices->removeElement($orderInvoice);

        return $this;
    }
}
