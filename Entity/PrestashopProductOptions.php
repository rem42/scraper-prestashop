<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopProductOptions
{
	/**
	 * @var ArrayCollection|PrestashopProductOption[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopProductOption>")
	 * @Serializer\SerializedName("product_options")
	 */
	protected $productOptions;

	/**
	 * @return ArrayCollection|PrestashopProductOption[]
	 */
	public function getProductOptions()
	{
		return $this->productOptions;
	}

	/**
	 * @param ArrayCollection|PrestashopProductOption[] $productOptions
	 *
	 * @return $this
	 */
	public function setProductOptions($productOptions)
	{
		$this->productOptions = $productOptions;
		return $this;
	}
}
