<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopOrderHistories
{
    /**
     * @var ArrayCollection|PrestashopOrderHistory[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopOrderHistory>")
     * @Serializer\SerializedName("order_histories")
     */
    protected $orderHistories;

    /**
     * @return ArrayCollection|PrestashopOrderHistory[]
     */
    public function getOrderHistories()
    {
        return $this->orderHistories;
    }

    /**
     * @param ArrayCollection|PrestashopOrderHistory[] $orderHistories
     *
     * @return $this
     */
    public function setOrderHistories($orderHistories)
    {
        $this->orderHistories = $orderHistories;
        return $this;
    }
}
