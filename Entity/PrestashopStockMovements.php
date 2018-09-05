<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopStockMovements
{
	/**
	 * @var ArrayCollection|PrestashopStockMovement[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopStockMovement>")
	 * @Serializer\SerializedName("stock_mvts")
	 */
	protected $stockMovements;

	/**
	 * @return ArrayCollection|PrestashopStockMovement[]
	 */
	public function getStockMovements()
	{
		return $this->stockMovements;
	}

	/**
	 * @param ArrayCollection|PrestashopStockMovement[] $stockMovements
	 * @return $this
	 */
	public function setStockMovements($stockMovements)
	{
		$this->stockMovements = $stockMovements;
		return $this;
	}
}
