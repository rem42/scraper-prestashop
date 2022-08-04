<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCarrier
{
    public ?int $id                    = null;
    public ?bool $deleted              = null;
    public ?bool $isModule             = null;
    public ?int $idTaxRulesGroup       = null;
    public ?int $idReference           = null;
    public ?string $name               = null;
    public ?bool $active               = null;
    public ?bool $isFree               = null;
    public ?string $url                = null;
    public ?int $shippingHandling      = null;
    public ?int $shippingExternal      = null;
    public ?int $rangeBehavior         = null;
    public ?int $shippingMethod        = null;
    public ?int $maxWidth              = null;
    public ?int $maxHeight             = null;
    public ?int $maxDepth              = null;
    public ?float $maxWeight           = null;
    public ?int $grade                 = null;
    public ?string $externalModuleName = null;
    public ?int $needRange             = null;
    public ?int $position              = null;
    /** @var array<int, PrestashopItem> */
    public array $delay = [];

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;
        return $this;
    }

    public function setIsModule(?bool $isModule): self
    {
        $this->isModule = $isModule;
        return $this;
    }

    public function setIdTaxRulesGroup(?int $idTaxRulesGroup): self
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;
        return $this;
    }

    public function setIdReference(?int $idReference): self
    {
        $this->idReference = $idReference;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    public function setIsFree(?bool $isFree): self
    {
        $this->isFree = $isFree;
        return $this;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function setShippingHandling(?int $shippingHandling): self
    {
        $this->shippingHandling = $shippingHandling;
        return $this;
    }

    public function setShippingExternal(?int $shippingExternal): self
    {
        $this->shippingExternal = $shippingExternal;
        return $this;
    }

    public function setRangeBehavior(?int $rangeBehavior): self
    {
        $this->rangeBehavior = $rangeBehavior;
        return $this;
    }

    public function setShippingMethod(?int $shippingMethod): self
    {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }

    public function setMaxWidth(?int $maxWidth): self
    {
        $this->maxWidth = $maxWidth;
        return $this;
    }

    public function setMaxHeight(?int $maxHeight): self
    {
        $this->maxHeight = $maxHeight;
        return $this;
    }

    public function setMaxDepth(?int $maxDepth): self
    {
        $this->maxDepth = $maxDepth;
        return $this;
    }

    public function setMaxWeight(?float $maxWeight): self
    {
        $this->maxWeight = $maxWeight;
        return $this;
    }

    public function setGrade(?int $grade): self
    {
        $this->grade = $grade;
        return $this;
    }

    public function setExternalModuleName(?string $externalModuleName): self
    {
        $this->externalModuleName = $externalModuleName;
        return $this;
    }

    public function setNeedRange(?int $needRange): self
    {
        $this->needRange = $needRange;
        return $this;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }

    public function addDelay(PrestashopItem $prestashopItem): self
    {
        $this->delay[] = $prestashopItem;

        return $this;
    }
}
