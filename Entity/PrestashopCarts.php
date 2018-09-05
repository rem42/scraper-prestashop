<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopCarts
{
	/**
	 * @var ArrayCollection|PrestashopCart[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopCart>")
	 * @Serializer\SerializedName("carts")
	 */
	protected $carts;

	/**
	 * @return ArrayCollection|PrestashopCart[]
	 */
	public function getCarts()
	{
		return $this->carts;
	}

	/**
	 * @param ArrayCollection|PrestashopCart[] $carts
	 * @return $this
	 */
	public function setCarts($carts)
	{
		$this->carts = $carts;
		return $this;
	}
}
