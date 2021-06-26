<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopStockMovementReasons
{
    /** @var Collection<int, PrestashopStockMovementReason> */
    private Collection $stockMovementReasons;

    public function __construct()
    {
        $this->stockMovementReasons = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopStockMovementReason>
     */
    public function getStockMovementReasons(): Collection
    {
        return $this->stockMovementReasons;
    }

    public function addStockMovementReason(PrestashopStockMovementReason $stockMovementReason): self
    {
        $this->stockMovementReasons->add($stockMovementReason);

        return $this;
    }

    public function removeStockMovementReason(PrestashopStockMovementReason $stockMovementReason): self
    {
        $this->stockMovementReasons->removeElement($stockMovementReason);

        return $this;
    }
}
