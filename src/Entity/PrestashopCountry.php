<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopCountry
{
    private ?bool $containsStates = null;

    /** @var Collection<int, PrestashopItem> */
    private Collection $name;

    private ?int $id = null;

    private ?int $idCurrency = null;

    private ?int $callPrefix = null;

    private ?string $isoCode = null;

    private ?bool $active = null;

    private ?bool $needIdentificationNumber = null;

    private ?bool $needZipCode = null;

    private ?string $zipCodeFormat = null;

    private ?bool $displayTaxLabel = null;

    public function __construct()
    {
        $this->name = new ArrayCollection();
    }

    public function getContainsStates(): ?bool
    {
        return $this->containsStates;
    }

    public function setContainsStates(?bool $containsStates): self
    {
        $this->containsStates = $containsStates;

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getName(): Collection
    {
        return $this->name;
    }

    public function addName(PrestashopItem $prestashopItem): self
    {
        $this->name->add($prestashopItem);

        return $this;
    }

    public function removeName(PrestashopItem $prestashopItem): self
    {
        $this->name->removeElement($prestashopItem);

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

    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
    }

    public function setIdCurrency(?int $idCurrency): self
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    public function getCallPrefix(): ?int
    {
        return $this->callPrefix;
    }

    public function setCallPrefix(?int $callPrefix): self
    {
        $this->callPrefix = $callPrefix;

        return $this;
    }

    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    public function setIsoCode(?string $isoCode): self
    {
        $this->isoCode = $isoCode;

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

    public function getNeedIdentificationNumber(): ?bool
    {
        return $this->needIdentificationNumber;
    }

    public function setNeedIdentificationNumber(?bool $needIdentificationNumber): self
    {
        $this->needIdentificationNumber = $needIdentificationNumber;

        return $this;
    }

    public function getNeedZipCode(): ?bool
    {
        return $this->needZipCode;
    }

    public function setNeedZipCode(?bool $needZipCode): self
    {
        $this->needZipCode = $needZipCode;

        return $this;
    }

    public function getZipCodeFormat(): ?string
    {
        return $this->zipCodeFormat;
    }

    public function setZipCodeFormat(?string $zipCodeFormat): self
    {
        $this->zipCodeFormat = $zipCodeFormat;

        return $this;
    }

    public function getDisplayTaxLabel(): ?bool
    {
        return $this->displayTaxLabel;
    }

    public function setDisplayTaxLabel(?bool $displayTaxLabel): self
    {
        $this->displayTaxLabel = $displayTaxLabel;

        return $this;
    }
}
