<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopCarrier
{
    private ?int $id = null;

    private ?bool $deleted = null;

    private ?bool $isModule = null;

    private ?int $idTaxRulesGroup = null;

    private ?int $idReference = null;

    private ?string $name = null;

    private ?bool $active = null;

    private ?bool $isFree = null;

    private ?string $url = null;

    private ?int $shippingHandling = null;

    private ?int $shippingExternal = null;

    private ?int $rangeBehavior = null;

    private ?int $shippingMethod = null;

    private ?int $maxWidth = null;

    private ?int $maxHeight = null;

    private ?int $maxDepth = null;

    private ?float $maxWeight = null;

    private ?int $grade = null;

    private ?string $externalModuleName = null;

    private ?int $needRange = null;

    private ?int $position = null;

    /** @var Collection<int, PrestashopItem> */
    private Collection $delay;

    public function __construct()
    {
        $this->delay = new ArrayCollection();
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

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getIsModule(): ?bool
    {
        return $this->isModule;
    }

    public function setIsModule(?bool $isModule): self
    {
        $this->isModule = $isModule;

        return $this;
    }

    public function getIdTaxRulesGroup(): ?int
    {
        return $this->idTaxRulesGroup;
    }

    public function setIdTaxRulesGroup(?int $idTaxRulesGroup): self
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;

        return $this;
    }

    public function getIdReference(): ?int
    {
        return $this->idReference;
    }

    public function setIdReference(?int $idReference): self
    {
        $this->idReference = $idReference;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getIsFree(): ?bool
    {
        return $this->isFree;
    }

    public function setIsFree(?bool $isFree): self
    {
        $this->isFree = $isFree;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getShippingHandling(): ?int
    {
        return $this->shippingHandling;
    }

    public function setShippingHandling(?int $shippingHandling): self
    {
        $this->shippingHandling = $shippingHandling;

        return $this;
    }

    public function getShippingExternal(): ?int
    {
        return $this->shippingExternal;
    }

    public function setShippingExternal(?int $shippingExternal): self
    {
        $this->shippingExternal = $shippingExternal;

        return $this;
    }

    public function getRangeBehavior(): ?int
    {
        return $this->rangeBehavior;
    }

    public function setRangeBehavior(?int $rangeBehavior): self
    {
        $this->rangeBehavior = $rangeBehavior;

        return $this;
    }

    public function getShippingMethod(): ?int
    {
        return $this->shippingMethod;
    }

    public function setShippingMethod(?int $shippingMethod): self
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    public function getMaxWidth(): ?int
    {
        return $this->maxWidth;
    }

    public function setMaxWidth(?int $maxWidth): self
    {
        $this->maxWidth = $maxWidth;

        return $this;
    }

    public function getMaxHeight(): ?int
    {
        return $this->maxHeight;
    }

    public function setMaxHeight(?int $maxHeight): self
    {
        $this->maxHeight = $maxHeight;

        return $this;
    }

    public function getMaxDepth(): ?int
    {
        return $this->maxDepth;
    }

    public function setMaxDepth(?int $maxDepth): self
    {
        $this->maxDepth = $maxDepth;

        return $this;
    }

    public function getMaxWeight(): ?float
    {
        return $this->maxWeight;
    }

    public function setMaxWeight(?float $maxWeight): self
    {
        $this->maxWeight = $maxWeight;

        return $this;
    }

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(?int $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getExternalModuleName(): ?string
    {
        return $this->externalModuleName;
    }

    public function setExternalModuleName(?string $externalModuleName): self
    {
        $this->externalModuleName = $externalModuleName;

        return $this;
    }

    public function getNeedRange(): ?int
    {
        return $this->needRange;
    }

    public function setNeedRange(?int $needRange): self
    {
        $this->needRange = $needRange;

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

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getDelay(): Collection
    {
        return $this->delay;
    }

    public function addDelay(PrestashopItem $prestashopItem): self
    {
        $this->delay->add($prestashopItem);

        return $this;
    }

    public function removeDelay(PrestashopItem $prestashopItem): self
    {
        $this->delay->removeElement($prestashopItem);

        return $this;
    }
}
