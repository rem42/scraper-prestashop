<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCountry
{
    public ?bool $containsStates = null;
    /** @var array<int, PrestashopItem> */
    public array $name = [];
    public ?int $id = null;
    public ?int $idCurrency = null;
    public ?int $callPrefix = null;
    public ?string $isoCode = null;
    public ?bool $active = null;
    public ?bool $needIdentificationNumber = null;
    public ?bool $needZipCode = null;
    public ?string $zipCodeFormat = null;
    public ?bool $displayTaxLabel = null;

    public function addName(PrestashopItem $prestashopItem): self
    {
        $this->name[] = $prestashopItem;

        return $this;
    }

    public function setContainsStates(?bool $containsStates): self
    {
        $this->containsStates = $containsStates;
        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIdCurrency(?int $idCurrency): self
    {
        $this->idCurrency = $idCurrency;
        return $this;
    }

    public function setCallPrefix(?int $callPrefix): self
    {
        $this->callPrefix = $callPrefix;
        return $this;
    }

    public function setIsoCode(?string $isoCode): self
    {
        $this->isoCode = $isoCode;
        return $this;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    public function setNeedIdentificationNumber(?bool $needIdentificationNumber): self
    {
        $this->needIdentificationNumber = $needIdentificationNumber;
        return $this;
    }

    public function setNeedZipCode(?bool $needZipCode): self
    {
        $this->needZipCode = $needZipCode;
        return $this;
    }

    public function setZipCodeFormat(?string $zipCodeFormat): self
    {
        $this->zipCodeFormat = $zipCodeFormat;
        return $this;
    }

    public function setDisplayTaxLabel(?bool $displayTaxLabel): self
    {
        $this->displayTaxLabel = $displayTaxLabel;
        return $this;
    }
}
