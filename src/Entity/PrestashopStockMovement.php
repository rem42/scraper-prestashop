<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopStockMovement
{
    public ?string $ean13;
    public ?int $id                     = null;
    public ?int $idProduct              = null;
    public ?int $idProductAttribute     = null;
    public ?int $idWarehouse            = null;
    public ?int $idCurrency             = null;
    public ?string $managementType      = null;
    public ?int $idEmployee             = null;
    public ?int $idStock                = null;
    public ?int $idStockMvtReason       = null;
    public ?int $idOrder                = null;
    public ?int $idSupplyOrder          = null;
    public ?string $productName         = null;
    public ?string $upc                 = null;
    public ?string $reference           = null;
    public ?int $physicalQuantity       = null;
    public ?bool $sign                  = null;
    public ?float $lastWa               = null;
    public ?float $currentWa            = null;
    public ?float $priceTe              = null;
    public ?\DateTimeInterface $dateAdd = null;

    public function setEan13(?string $ean13): self
    {
        $this->ean13 = $ean13;
        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIdProduct(?int $idProduct): self
    {
        $this->idProduct = $idProduct;
        return $this;
    }

    public function setIdProductAttribute(?int $idProductAttribute): self
    {
        $this->idProductAttribute = $idProductAttribute;
        return $this;
    }

    public function setIdWarehouse(?int $idWarehouse): self
    {
        $this->idWarehouse = $idWarehouse;
        return $this;
    }

    public function setIdCurrency(?int $idCurrency): self
    {
        $this->idCurrency = $idCurrency;
        return $this;
    }

    public function setManagementType(?string $managementType): self
    {
        $this->managementType = $managementType;
        return $this;
    }

    public function setIdEmployee(?int $idEmployee): self
    {
        $this->idEmployee = $idEmployee;
        return $this;
    }

    public function setIdStock(?int $idStock): self
    {
        $this->idStock = $idStock;
        return $this;
    }

    public function setIdStockMvtReason(?int $idStockMvtReason): self
    {
        $this->idStockMvtReason = $idStockMvtReason;
        return $this;
    }

    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;
        return $this;
    }

    public function setIdSupplyOrder(?int $idSupplyOrder): self
    {
        $this->idSupplyOrder = $idSupplyOrder;
        return $this;
    }

    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    public function setUpc(?string $upc): self
    {
        $this->upc = $upc;
        return $this;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function setPhysicalQuantity(?int $physicalQuantity): self
    {
        $this->physicalQuantity = $physicalQuantity;
        return $this;
    }

    public function setSign(?bool $sign): self
    {
        $this->sign = $sign;
        return $this;
    }

    public function setLastWa(?float $lastWa): self
    {
        $this->lastWa = $lastWa;
        return $this;
    }

    public function setCurrentWa(?float $currentWa): self
    {
        $this->currentWa = $currentWa;
        return $this;
    }

    public function setPriceTe(?float $priceTe): self
    {
        $this->priceTe = $priceTe;
        return $this;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }
}
