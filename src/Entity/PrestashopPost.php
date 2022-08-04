<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopPost
{
    public ?PrestashopOrderHistory $orderHistory     = null;
    public ?PrestashopStockAvailable $stockAvailable = null;

    public function setOrderHistory(?PrestashopOrderHistory $orderHistory): self
    {
        $this->orderHistory = $orderHistory;
        return $this;
    }

    public function setStockAvailable(?PrestashopStockAvailable $stockAvailable): self
    {
        $this->stockAvailable = $stockAvailable;
        return $this;
    }
}
