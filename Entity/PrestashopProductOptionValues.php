<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopProductOptionValues
{
	/**
	 * @var ArrayCollection|PrestashopProductOptionValue[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopProductOptionValue>")
	 * @Serializer\SerializedName("product_option_values")
	 */
	protected $productOptionValues;

	/**
	 * @return ArrayCollection|PrestashopProductOptionValue[]
	 */
	public function getProductOptionValues()
	{
		return $this->productOptionValues;
	}

	/**
	 * @param ArrayCollection|PrestashopProductOptionValue[] $productOptionValues
	 *
	 * @return $this
	 */
	public function setProductOptionValues($productOptionValues)
	{
		$this->productOptionValues = $productOptionValues;
		return $this;
	}
}
