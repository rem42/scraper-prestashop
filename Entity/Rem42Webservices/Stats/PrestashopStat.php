<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Stats;

use JMS\Serializer\Annotation as Serializer;

class PrestashopStat
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("product_count")
     */
    protected $productCount;

    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("order_count")
     */
    protected $orderCount;

    /**
     * @return int
     */
    public function getProductCount(): ?int
    {
        return $this->productCount;
    }

    /**
     * @param int $productCount
     *
     * @return $this
     */
    public function setProductCount(?int $productCount)
    {
        $this->productCount = $productCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderCount(): ?int
    {
        return $this->orderCount;
    }

    /**
     * @param int $orderCount
     *
     * @return $this
     */
    public function setOrderCount(?int $orderCount)
    {
        $this->orderCount = $orderCount;
        return $this;
    }
}
