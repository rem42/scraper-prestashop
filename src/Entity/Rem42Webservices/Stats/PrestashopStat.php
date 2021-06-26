<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Stats;

final class PrestashopStat
{
    private ?int $productCount = null;

    private ?int $orderCount = null;

    public function getProductCount(): ?int
    {
        return $this->productCount;
    }

    public function setProductCount(?int $productCount): self
    {
        $this->productCount = $productCount;

        return $this;
    }

    public function getOrderCount(): ?int
    {
        return $this->orderCount;
    }

    public function setOrderCount(?int $orderCount): self
    {
        $this->orderCount = $orderCount;

        return $this;
    }
}
