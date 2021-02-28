<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopProductFeatureValue
{
    /** @var Collection<int, PrestashopItem> */
    private Collection $value;

    private ?int $id = null;

    private ?string $idFeature = null;

    private ?bool $custom = null;

    public function __construct()
    {
        $this->value = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getValue(): Collection
    {
        return $this->value;
    }

    public function addValue(PrestashopItem $value): self
    {
        $this->value->add($value);

        return $this;
    }

    public function removeValue(PrestashopItem $value): self
    {
        $this->value->removeElement($value);

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdFeature(): ?string
    {
        return $this->idFeature;
    }

    public function setIdFeature(?string $idFeature): self
    {
        $this->idFeature = $idFeature;

        return $this;
    }

    public function getCustom(): ?bool
    {
        return $this->custom;
    }

    public function setCustom(?bool $custom): self
    {
        $this->custom = $custom;

        return $this;
    }
}
