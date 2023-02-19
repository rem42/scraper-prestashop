<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservices\Socolissimo;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopDeliveryInfos
{
    /** @var Collection<int, self> */
    private Collection $deliveryInfos;

    public function __construct()
    {
        $this->deliveryInfos = new ArrayCollection();
    }

    /**
     * @return Collection<int, self>
     */
    public function getDeliveryInfos(): Collection
    {
        return $this->deliveryInfos;
    }

    public function addDeliveryInfo(self $deliveryInfo): self
    {
        $this->deliveryInfos->add($deliveryInfo);

        return $this;
    }

    public function removeDeliveryInfo(self $deliveryInfo): self
    {
        $this->deliveryInfos->removeElement($deliveryInfo);

        return $this;
    }
}
