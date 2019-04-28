<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservice\Colissimo;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopPickupPoints
{
    /**
     * @var ArrayCollection|PrestashopPickupPoint[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\Rem42Webservice\Colissimo\PrestashopPickupPoint>")
     * @Serializer\SerializedName("pickup_points")
     */
    protected $pickupPoints;

    /**
     * @return ArrayCollection|PrestashopPickupPoint[]
     */
    public function getPickupPoints()
    {
        return $this->pickupPoints;
    }

    /**
     * @param ArrayCollection|PrestashopPickupPoint[] $pickupPoints
     *
     * @return $this
     */
    public function setPickupPoints($pickupPoints)
    {
        $this->pickupPoints = $pickupPoints;
        return $this;
    }
}
