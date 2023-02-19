<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopProductOption
{
    /** @var Collection<int, PrestashopItem> */
    private Collection $name;

    /** @var Collection<int, PrestashopItem> */
    private Collection $publicName;

    private ?int $id = null;

    private ?bool $isColorGroup = null;

    private ?string $groupType = null;

    private ?int $position = null;

    private ?PrestashopAssociations $associations = null;

    public function __construct()
    {
        $this->name = new ArrayCollection();
        $this->publicName = new ArrayCollection();
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

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getPublicName(): Collection
    {
        return $this->publicName;
    }

    public function addPublicName(PrestashopItem $publicName): self
    {
        $this->publicName->add($publicName);

        return $this;
    }

    public function removePublicName(PrestashopItem $publicName): self
    {
        $this->publicName->removeElement($publicName);

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

    public function getIsColorGroup(): ?bool
    {
        return $this->isColorGroup;
    }

    public function setIsColorGroup(?bool $isColorGroup): self
    {
        $this->isColorGroup = $isColorGroup;

        return $this;
    }

    public function getGroupType(): ?string
    {
        return $this->groupType;
    }

    public function setGroupType(?string $groupType): self
    {
        $this->groupType = $groupType;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getAssociations(): ?PrestashopAssociations
    {
        return $this->associations;
    }

    public function setAssociations(?PrestashopAssociations $associations): self
    {
        $this->associations = $associations;

        return $this;
    }
}
