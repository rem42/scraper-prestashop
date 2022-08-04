<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopPut
{
    public ?PrestashopOrderCarrier $orderCarrier = null;
    public ?PrestashopOrderHistory $orderHistory = null;
    public ?PrestashopStockAvailable $stockAvailable = null;

    public function setOrderCarrier(?PrestashopOrderCarrier $orderCarrier): self
    {
        $this->orderCarrier = $orderCarrier;
        return $this;
    }

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
