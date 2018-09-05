<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopCarriers
{
	/**
	 * @var ArrayCollection|PrestashopCarrier[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopCarrier>")
	 * @Serializer\SerializedName("carriers")
	 */
	protected $carriers;

	/**
	 * @return ArrayCollection|PrestashopCarrier[]
	 */
	public function getCarriers()
	{
		return $this->carriers;
	}

	/**
	 * @param ArrayCollection|PrestashopCarrier[] $carriers
	 * @return $this
	 */
	public function setCarriers($carriers)
	{
		$this->carriers = $carriers;
		return $this;
	}
}
