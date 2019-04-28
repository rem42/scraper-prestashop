<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopOrderStates
{
    /**
     * @var ArrayCollection|PrestashopOrderState[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopOrderState>")
     * @Serializer\SerializedName("order_states")
     */
    protected $orderStates;

    /**
     * @return ArrayCollection|PrestashopOrderState[]
     */
    public function getOrderStates()
    {
        return $this->orderStates;
    }

    /**
     * @param ArrayCollection|PrestashopOrderState[] $orderStates
     *
     * @return $this
     */
    public function setOrderStates($orderStates)
    {
        $this->orderStates = $orderStates;
        return $this;
    }
}
