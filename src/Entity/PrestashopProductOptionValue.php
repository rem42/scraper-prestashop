<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopProductOptionValue
{
    /** @var Collection<int, PrestashopItem> */
    private Collection $name;

    private ?int $id = null;

    private ?int $idAttributeGroup = null;

    private ?string $color = null;

    private ?int $position = null;

    public function __construct()
    {
        $this->name = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getName(): Collection
    {
        return $this->name;
    }

    public function addName(PrestashopItem $name): self
    {
        $this->name->add($name);

        return $this;
    }

    public function removeName(PrestashopItem $name): self
    {
        $this->name->removeElement($name);

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return PrestashopProductOptionValue
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdAttributeGroup(): ?int
    {
        return $this->idAttributeGroup;
    }

    /**
     * @return PrestashopProductOptionValue
     */
    public function setIdAttributeGroup(?int $idAttributeGroup): self
    {
        $this->idAttributeGroup = $idAttributeGroup;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @return PrestashopProductOptionValue
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return PrestashopProductOptionValue
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }
}
