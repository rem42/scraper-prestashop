<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopAddresses
{
    /**
     * @var ArrayCollection|PrestashopAddress[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopAddress>")
     * @Serializer\SerializedName("addresses")
     */
    protected $addresses;

    /**
     * @return ArrayCollection|PrestashopAddress[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param ArrayCollection|PrestashopAddress[] $addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }
}
