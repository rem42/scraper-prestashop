<?php

namespace Scraper\ScraperPrestashop\Request;

use JMS\Serializer\SerializerBuilder;
use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\ScraperPrestashop\Entity\PrestashopPut;

/**
 * Class PrestashopGetRequest
 *
 * @UrlAnnotation(url="{resource}/{id}", contentType="JSON", method="PUT", protocol="CURL")
 */
class PrestashopPutRequest extends PrestashopRequest
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
     * @var PrestashopPut
     */
    protected $prestashopPut;

    public function getBody()
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->serialize($this->getPrestashopPut(), 'xml');
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
     *
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
     *
     * @return $this
     */
    public function setResource(?string $resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return PrestashopPut
     */
    public function getPrestashopPut(): ?PrestashopPut
    {
        return $this->prestashopPut;
    }

    /**
     * @param PrestashopPut $prestashopPut
     *
     * @return $this
     */
    public function setPrestashopPut(?PrestashopPut $prestashopPut)
    {
        $this->prestashopPut = $prestashopPut;
        return $this;
    }
}
