<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopPut
{
    private ?PrestashopOrderCarrier $orderCarrier = null;

    private ?PrestashopOrderHistory $orderHistory = null;

    private ?PrestashopStockAvailable $stockAvailable = null;

    public function getOrderCarrier(): ?PrestashopOrderCarrier
    {
        return $this->orderCarrier;
    }

    public function setOrderCarrier(?PrestashopOrderCarrier $orderCarrier): self
    {
        $this->orderCarrier = $orderCarrier;

        return $this;
    }

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
