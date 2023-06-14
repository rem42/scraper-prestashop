<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopStockMovementReasons
{
    /** @var array<int, PrestashopStockMovementReason> */
    public array $stockMovementReasons = [];

    public function addStockMovementReason(PrestashopStockMovementReason $stockMovementReason): self
    {
        $this->stockMovementReasons[] = $stockMovementReason;

        return $this;
    }
}
