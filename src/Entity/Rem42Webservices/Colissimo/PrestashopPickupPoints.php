<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Colissimo;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopPickupPoints
{
    /** @var Collection<int, PrestashopPickupPoint> */
    private Collection $pickupPoints;

    public function __construct()
    {
        $this->pickupPoints = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopPickupPoint>
     */
    public function getPickupPoints(): Collection
    {
        return $this->pickupPoints;
    }

    public function addPickupPoint(PrestashopPickupPoint $pickupPoint): self
    {
        $this->pickupPoints->add($pickupPoint);

        return $this;
    }

    public function removePickupPoint(PrestashopPickupPoint $pickupPoint): self
    {
        $this->pickupPoints->removeElement($pickupPoint);

        return $this;
    }
}
