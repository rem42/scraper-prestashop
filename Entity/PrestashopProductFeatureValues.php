<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopProductFeatureValues
{
	/**
	 * @var ArrayCollection|PrestashopProductFeatureValue[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopProductFeatureValue>")
	 * @Serializer\SerializedName("product_feature_values")
	 */
	protected $productFeatureValues;

	/**
	 * @return ArrayCollection|PrestashopProductFeatureValue[]
	 */
	public function getProductFeatureValues()
	{
		return $this->productFeatureValues;
	}

	/**
	 * @param ArrayCollection|PrestashopProductFeatureValue[] $productFeatureValues
	 * @return $this
	 */
	public function setProductFeatureValues($productFeatureValues)
	{
		$this->productFeatureValues = $productFeatureValues;
		return $this;
	}
}
