<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopProductFeature
{
    /** @var Collection<int, PrestashopItem> */
    private Collection $name;

    private ?int $id = null;

    private ?int $idFeatureValue = null;

    private ?string $position = null;

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
     * @return PrestashopProductFeature
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdFeatureValue(): ?int
    {
        return $this->idFeatureValue;
    }

    /**
     * @return PrestashopProductFeature
     */
    public function setIdFeatureValue(?int $idFeatureValue): self
    {
        $this->idFeatureValue = $idFeatureValue;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @return PrestashopProductFeature
     */
    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }
}
