<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopProducts
{
	/**
	 * @var ArrayCollection|PrestashopProduct[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopProduct>")
	 * @Serializer\SerializedName("products")
	 */
	protected $products;

	/**
	 * @return ArrayCollection|PrestashopProduct[]
	 */
	public function getProducts()
	{
		return $this->products;
	}

	/**
	 * @param ArrayCollection|PrestashopProduct[] $products
	 * @return $this
	 */
	public function setProducts($products)
	{
		$this->products = $products;
		return $this;
	}
}
