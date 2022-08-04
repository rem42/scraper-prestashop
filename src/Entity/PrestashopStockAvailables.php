<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopStockAvailables
{
    /** @var array<int, PrestashopStockAvailable> */
    public array $stockAvailables = [];

    public function addStockAvailable(PrestashopStockAvailable $stockAvailable): self
    {
        $this->stockAvailables[] = $stockAvailable;

        return $this;
    }
}
