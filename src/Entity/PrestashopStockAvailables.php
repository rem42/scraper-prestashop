<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopStockAvailables
{
    /** @var Collection<int, PrestashopStockAvailable> */
    private Collection $stockAvailables;

    public function __construct()
    {
        $this->stockAvailables = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopStockAvailable>
     */
    public function getStockAvailables(): Collection
    {
        return $this->stockAvailables;
    }

    public function addStockAvailable(PrestashopStockAvailable $stockAvailable): self
    {
        $this->stockAvailables->add($stockAvailable);

        return $this;
    }

    public function removeStockAvailable(PrestashopStockAvailable $stockAvailable): self
    {
        $this->stockAvailables->removeElement($stockAvailable);

        return $this;
    }
}
