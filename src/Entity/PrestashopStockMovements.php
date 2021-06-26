<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopStockMovements
{
    /** @var Collection<int, PrestashopStockMovement> */
    private Collection $stockMovements;

    public function __construct()
    {
        $this->stockMovements = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopStockMovement>
     */
    public function getStockMovements(): Collection
    {
        return $this->stockMovements;
    }

    public function addStockMovement(PrestashopStockMovement $stockMovement): self
    {
        $this->stockMovements->add($stockMovement);

        return $this;
    }

    public function removeStockMovement(PrestashopStockMovement $stockMovement): self
    {
        $this->stockMovements->removeElement($stockMovement);

        return $this;
    }
}
