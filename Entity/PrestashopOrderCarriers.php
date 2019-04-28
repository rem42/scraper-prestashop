<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopOrderCarriers
{
    /**
     * @var ArrayCollection|PrestashopOrderCarrier[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopOrderCarrier>")
     * @Serializer\SerializedName("order_carriers")
     */
    protected $orderCarriers;

    /**
     * @return ArrayCollection|PrestashopOrderCarrier[]
     */
    public function getOrderCarriers()
    {
        return $this->orderCarriers;
    }

    /**
     * @param ArrayCollection|PrestashopOrderCarrier[] $orderCarriers
     *
     * @return $this
     */
    public function setOrderCarriers($orderCarriers)
    {
        $this->orderCarriers = $orderCarriers;
        return $this;
    }
}
