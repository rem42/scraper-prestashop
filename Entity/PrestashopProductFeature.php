<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

class PrestashopProductFeature
{
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("id")
	 */
	protected $id;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("position")
	 */
	protected $position;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("name")
	 */
	protected $name;

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
	public function setId(?int $id): self
	{
		$this->id = $id;
		return $this;
	}

    /**
     * @return string
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @param string $position
     *
     * @return $this
     */
    public function setPosition(?string $position): self
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
