<?php

namespace Scraper\ScraperPrestashop\Request;

use JMS\Serializer\SerializerBuilder;
use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\ScraperPrestashop\Entity\PrestashopPost;

/**
 * Class PrestashopGetRequest
 * @package Scraper\ScraperPrestashop\Request
 *
 * @UrlAnnotation(url="{resource}/{id}", contentType="JSON", method="POST", protocol="CURL")
 */
class PrestashopPostRequest extends PrestashopRequest
{
	/**
	 * @var int
	 */
	protected $id;
	/**
	 * @var string
	 */
	protected $resource;
	/**
	 * @var PrestashopPost
	 */
	protected $prestashopPost;

	public function getBody()
	{
		$serializer = SerializerBuilder::create()->build();
		return $serializer->serialize($this->getPrestashopPost(), 'xml');
	}

	/**
	 * @return int
	 */
	public function getId(): ?int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return $this
	 */
	public function setId(?int $id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getResource(): ?string
	{
		return $this->resource;
	}

	/**
	 * @param string $resource
	 * @return $this
	 */
	public function setResource(?string $resource)
	{
		$this->resource = $resource;
		return $this;
	}

	/**
	 * @return PrestashopPost
	 */
	public function getPrestashopPost(): ?PrestashopPost
	{
		return $this->prestashopPost;
	}

	/**
	 * @param PrestashopPost $prestashopPost
	 * @return $this
	 */
	public function setPrestashopPost(?PrestashopPost $prestashopPost)
	{
		$this->prestashopPost = $prestashopPost;
		return $this;
	}
}
