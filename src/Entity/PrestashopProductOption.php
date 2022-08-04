<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopProductOption
{
    /** @var array<int, PrestashopItem> */
    public array $name = [];
    /** @var array<int, PrestashopItem> */
    public array $publicName                     = [];
    public ?int $id                              = null;
    public ?bool $isColorGroup                   = null;
    public ?string $groupType                    = null;
    public ?int $position                        = null;
    public ?PrestashopAssociations $associations = null;

    public function addName(PrestashopItem $name): self
    {
        $this->name[] = $name;

        return $this;
    }

    public function addPublicName(PrestashopItem $publicName): self
    {
        $this->publicName[] = $publicName;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIsColorGroup(?bool $isColorGroup): self
    {
        $this->isColorGroup = $isColorGroup;
        return $this;
    }

    public function setGroupType(?string $groupType): self
    {
        $this->groupType = $groupType;
        return $this;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }

    public function setAssociations(?PrestashopAssociations $associations): self
    {
        $this->associations = $associations;
        return $this;
    }
}
