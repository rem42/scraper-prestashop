<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopStockMovements
{
    /** @var array<int, PrestashopStockMovement> */
    public array $stockMovements = [];

    public function addStockMovement(PrestashopStockMovement $stockMovement): self
    {
        $this->stockMovements[] = $stockMovement;

        return $this;
    }
}
