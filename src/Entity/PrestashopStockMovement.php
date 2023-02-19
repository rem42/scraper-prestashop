<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopStockMovement
{
    private ?string $ean13;

    private ?int $id = null;

    private ?int $idProduct = null;

    private ?int $idProductAttribute = null;

    private ?int $idWarehouse = null;

    private ?int $idCurrency = null;

    private ?string $managementType = null;

    private ?int $idEmployee = null;

    private ?int $idStock = null;

    private ?int $idStockMvtReason = null;

    private ?int $idOrder = null;

    private ?int $idSupplyOrder = null;

    private ?string $productName = null;

    private ?string $upc = null;

    private ?string $reference = null;

    private ?int $physicalQuantity = null;

    private ?bool $sign = null;

    private ?float $lastWa = null;

    private ?float $currentWa = null;

    private ?float $priceTe = null;

    private ?\DateTimeInterface $dateAdd = null;

    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    public function setEan13(?string $ean13): self
    {
        $this->ean13 = $ean13;

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

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function setIdProduct(?int $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getIdProductAttribute(): ?int
    {
        return $this->idProductAttribute;
    }

    public function setIdProductAttribute(?int $idProductAttribute): self
    {
        $this->idProductAttribute = $idProductAttribute;

        return $this;
    }

    public function getIdWarehouse(): ?int
    {
        return $this->idWarehouse;
    }

    public function setIdWarehouse(?int $idWarehouse): self
    {
        $this->idWarehouse = $idWarehouse;

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

    public function getManagementType(): ?string
    {
        return $this->managementType;
    }

    public function setManagementType(?string $managementType): self
    {
        $this->managementType = $managementType;

        return $this;
    }

    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
    }

    public function setIdEmployee(?int $idEmployee): self
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    public function getIdStock(): ?int
    {
        return $this->idStock;
    }

    public function setIdStock(?int $idStock): self
    {
        $this->idStock = $idStock;

        return $this;
    }

    public function getIdStockMvtReason(): ?int
    {
        return $this->idStockMvtReason;
    }

    public function setIdStockMvtReason(?int $idStockMvtReason): self
    {
        $this->idStockMvtReason = $idStockMvtReason;

        return $this;
    }

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getIdSupplyOrder(): ?int
    {
        return $this->idSupplyOrder;
    }

    public function setIdSupplyOrder(?int $idSupplyOrder): self
    {
        $this->idSupplyOrder = $idSupplyOrder;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getUpc(): ?string
    {
        return $this->upc;
    }

    public function setUpc(?string $upc): self
    {
        $this->upc = $upc;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getPhysicalQuantity(): ?int
    {
        return $this->physicalQuantity;
    }

    public function setPhysicalQuantity(?int $physicalQuantity): self
    {
        $this->physicalQuantity = $physicalQuantity;

        return $this;
    }

    public function getSign(): ?bool
    {
        return $this->sign;
    }

    public function setSign(?bool $sign): self
    {
        $this->sign = $sign;

        return $this;
    }

    public function getLastWa(): ?float
    {
        return $this->lastWa;
    }

    public function setLastWa(?float $lastWa): self
    {
        $this->lastWa = $lastWa;

        return $this;
    }

    public function getCurrentWa(): ?float
    {
        return $this->currentWa;
    }

    public function setCurrentWa(?float $currentWa): self
    {
        $this->currentWa = $currentWa;

        return $this;
    }

    public function getPriceTe(): ?float
    {
        return $this->priceTe;
    }

    public function setPriceTe(?float $priceTe): self
    {
        $this->priceTe = $priceTe;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }
}
