<?php

namespace Scraper\ScraperPrestashop\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class PrestashopGetRequest
 * @package Scraper\ScraperPrestashop\Request
 *
 * @UrlAnnotation(url="{resource}/{id}", contentType="JSON", protocol="CURL", method="GET")
 */
class PrestashopGetRequest extends PrestashopRequest
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
	 * @var array
	 */
	protected $urlParameters = [];

	public function getParameters()
	{
		$parent = parent::getParameters();

		return array_merge($parent, $this->urlParameters);
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
	 * @return array
	 */
	public function getUrlParameters(): ?array
	{
		return $this->urlParameters;
	}

	/**
	 * @param array $urlParameters
	 * @return $this
	 */
	public function setUrlParameters(?array $urlParameters)
	{
		$this->urlParameters = $urlParameters;
		return $this;
	}
}
