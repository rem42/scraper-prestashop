<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopOrders
{
	/**
	 * @var ArrayCollection|PrestashopOrder[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopOrder>")
	 * @Serializer\SerializedName("orders")
	 */
	protected $orders;

	/**
	 * @return ArrayCollection|PrestashopOrder[]
	 */
	public function getOrders()
	{
		return $this->orders;
	}

	/**
	 * @param ArrayCollection|PrestashopOrder[] $orders
	 * @return $this
	 */
	public function setOrders($orders)
	{
		$this->orders = $orders;
		return $this;
	}
}
