<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopCombinations
{
	/**
	 * @var ArrayCollection|PrestashopCombination[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopCombination>")
	 * @Serializer\SerializedName("combinations")
	 */
	protected $combinations;

	/**
	 * @return ArrayCollection|PrestashopCombination[]
	 */
	public function getCombinations()
	{
		return $this->combinations;
	}

	/**
	 * @param ArrayCollection|PrestashopCombination[] $combinations
	 *
	 * @return $this
	 */
	public function setCombinations($combinations)
	{
		$this->combinations = $combinations;
		return $this;
	}
}
