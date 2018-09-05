<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopCustomers
{
	/**
	 * @var ArrayCollection|PrestashopCustomer[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopCustomer>")
	 * @Serializer\SerializedName("customers")
	 */
	protected $customers;

	/**
	 * @return ArrayCollection|PrestashopCustomer[]
	 */
	public function getCustomers()
	{
		return $this->customers;
	}

	/**
	 * @param ArrayCollection|PrestashopCustomer[] $customers
	 * @return $this
	 */
	public function setCustomers($customers)
	{
		$this->customers = $customers;
		return $this;
	}
}
