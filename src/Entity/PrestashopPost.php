<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopPost
{
    private ?PrestashopOrderHistory $orderHistory = null;

    private ?PrestashopStockAvailable $stockAvailable = null;

    public function getOrderHistory(): ?PrestashopOrderHistory
    {
        return $this->orderHistory;
    }

    public function setOrderHistory(?PrestashopOrderHistory $orderHistory): self
    {
        $this->orderHistory = $orderHistory;

        return $this;
    }

    public function getStockAvailable(): ?PrestashopStockAvailable
    {
        return $this->stockAvailable;
    }

    public function setStockAvailable(?PrestashopStockAvailable $stockAvailable): self
    {
        $this->stockAvailable = $stockAvailable;

        return $this;
    }
}
