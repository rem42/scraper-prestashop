<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopProductFeatures
{
    /**
     * @var ArrayCollection|PrestashopProductFeature[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopProductFeature>")
     * @Serializer\SerializedName("product_features")
     */
    protected $productFeatures;

    /**
     * @return ArrayCollection|PrestashopProductFeature[]
     */
    public function getProductFeatures()
    {
        return $this->productFeatures;
    }

    /**
     * @param ArrayCollection|PrestashopProductFeature[] $productFeatures
     *
     * @return $this
     */
    public function setProductFeatures($productFeatures)
    {
        $this->productFeatures = $productFeatures;
        return $this;
    }
}
