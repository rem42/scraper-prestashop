<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopStockAvailables
{
	/**
	 * @var ArrayCollection|PrestashopStockAvailable[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopStockAvailable>")
	 * @Serializer\SerializedName("stock_availables")
	 */
	protected $stockAvailable;

	/**
	 * @return ArrayCollection|PrestashopStockAvailable[]
	 */
	public function getStockAvailable()
	{
		return $this->stockAvailable;
	}

	/**
	 * @param ArrayCollection|PrestashopStockAvailable[] $stockAvailable
	 * @return $this
	 */
	public function setStockAvailable($stockAvailable)
	{
		$this->stockAvailable = $stockAvailable;
		return $this;
	}
}
