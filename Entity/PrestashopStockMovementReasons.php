<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopStockMovementReasons
{
    /**
     * @var ArrayCollection|PrestashopStockMovementReason[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopStockMovementReason>")
     * @Serializer\SerializedName("stock_movement_reasons")
     */
    protected $stockMovementReasons;

    /**
     * @return ArrayCollection|PrestashopStockMovementReason[]
     */
    public function getStockMovementReasons()
    {
        return $this->stockMovementReasons;
    }

    /**
     * @param ArrayCollection|PrestashopStockMovementReason[] $stockMovementReasons
     *
     * @return $this
     */
    public function setStockMovementReasons($stockMovementReasons)
    {
        $this->stockMovementReasons = $stockMovementReasons;
        return $this;
    }
}
