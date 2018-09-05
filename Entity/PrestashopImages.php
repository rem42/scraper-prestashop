<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class PrestashopImages
{
	/**
	 * @var ArrayCollection|PrestashopImage[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopImage>")
	 * @Serializer\SerializedName("images")
	 */
	protected $images;

	/**
	 * @return ArrayCollection|PrestashopImage[]
	 */
	public function getImages()
	{
		return $this->images;
	}

	/**
	 * @param ArrayCollection|PrestashopImage[] $images
	 * @return $this
	 */
	public function setImages($images)
	{
		$this->images = $images;
		return $this;
	}
}
