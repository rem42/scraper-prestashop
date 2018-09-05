<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopCountries
{
	/**
	 * @var ArrayCollection|PrestashopCountry[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopCountry>")
	 * @Serializer\SerializedName("countries")
	 */
	protected $countries;

	/**
	 * @return ArrayCollection|PrestashopCountry[]
	 */
	public function getCountries()
	{
		return $this->countries;
	}

	/**
	 * @param ArrayCollection|PrestashopCountry[] $countries
	 * @return $this
	 */
	public function setCountries($countries)
	{
		$this->countries = $countries;
		return $this;
	}
}
