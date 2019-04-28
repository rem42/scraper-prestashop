<?php

namespace Scraper\ScraperPrestashop\Entity\Rem42Webservice\Socolissimo;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopDeliveryInfos
{
    /**
     * @var ArrayCollection|PrestashopDeliveryInfo[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\Rem42Webservice\Socolissimo\PrestashopDeliveryInfo>")
     * @Serializer\SerializedName("delivery_infos")
     */
    protected $deliveryInfos;

    /**
     * @return ArrayCollection|PrestashopDeliveryInfo[]
     */
    public function getDeliveryInfos()
    {
        return $this->deliveryInfos;
    }

    /**
     * @param ArrayCollection|PrestashopDeliveryInfo[] $deliveryInfos
     *
     * @return $this
     */
    public function setDeliveryInfos($deliveryInfos)
    {
        $this->deliveryInfos = $deliveryInfos;
        return $this;
    }
}
