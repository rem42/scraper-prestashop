<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderInvoice
{
    private ?int $id = null;

    private ?int $idOrder = null;

    private ?int $number = null;

    private ?int $deliveryNumber = null;

    private ?\DateTimeInterface $deliveryDate = null;

    private ?float $totalDiscountTaxExcl = null;

    private ?float $totalDiscountTaxIncl = null;

    private ?float $totalPaidTaxExcl = null;

    private ?float $totalPaidTaxIncl = null;

    private ?float $totalProducts = null;

    private ?float $totalProductsWt = null;

    private ?float $totalShippingTaxExcl = null;

    private ?float $totalShippingTaxIncl = null;

    private ?int $shippingTaxComputationMethod = null;

    private ?float $totalWrappingTaxExcl = null;

    private ?float $totalWrappingTaxIncl = null;

    private ?string $shopAddress = null;

    private ?string $note = null;

    private ?\DateTimeInterface $dateAdd = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

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

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getDeliveryNumber(): ?int
    {
        return $this->deliveryNumber;
    }

    public function setDeliveryNumber(?int $deliveryNumber): self
    {
        $this->deliveryNumber = $deliveryNumber;

        return $this;
    }

    public function getDeliveryDate(): ?\DateTimeInterface
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(?\DateTimeInterface $deliveryDate): self
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    public function getTotalDiscountTaxExcl(): ?float
    {
        return $this->totalDiscountTaxExcl;
    }

    public function setTotalDiscountTaxExcl(?float $totalDiscountTaxExcl): self
    {
        $this->totalDiscountTaxExcl = $totalDiscountTaxExcl;

        return $this;
    }

    public function getTotalDiscountTaxIncl(): ?float
    {
        return $this->totalDiscountTaxIncl;
    }

    public function setTotalDiscountTaxIncl(?float $totalDiscountTaxIncl): self
    {
        $this->totalDiscountTaxIncl = $totalDiscountTaxIncl;

        return $this;
    }

    public function getTotalPaidTaxExcl(): ?float
    {
        return $this->totalPaidTaxExcl;
    }

    public function setTotalPaidTaxExcl(?float $totalPaidTaxExcl): self
    {
        $this->totalPaidTaxExcl = $totalPaidTaxExcl;

        return $this;
    }

    public function getTotalPaidTaxIncl(): ?float
    {
        return $this->totalPaidTaxIncl;
    }

    public function setTotalPaidTaxIncl(?float $totalPaidTaxIncl): self
    {
        $this->totalPaidTaxIncl = $totalPaidTaxIncl;

        return $this;
    }

    public function getTotalProducts(): ?float
    {
        return $this->totalProducts;
    }

    public function setTotalProducts(?float $totalProducts): self
    {
        $this->totalProducts = $totalProducts;

        return $this;
    }

    public function getTotalProductsWt(): ?float
    {
        return $this->totalProductsWt;
    }

    public function setTotalProductsWt(?float $totalProductsWt): self
    {
        $this->totalProductsWt = $totalProductsWt;

        return $this;
    }

    public function getTotalShippingTaxExcl(): ?float
    {
        return $this->totalShippingTaxExcl;
    }

    public function setTotalShippingTaxExcl(?float $totalShippingTaxExcl): self
    {
        $this->totalShippingTaxExcl = $totalShippingTaxExcl;

        return $this;
    }

    public function getTotalShippingTaxIncl(): ?float
    {
        return $this->totalShippingTaxIncl;
    }

    public function setTotalShippingTaxIncl(?float $totalShippingTaxIncl): self
    {
        $this->totalShippingTaxIncl = $totalShippingTaxIncl;

        return $this;
    }

    public function getShippingTaxComputationMethod(): ?int
    {
        return $this->shippingTaxComputationMethod;
    }

    public function setShippingTaxComputationMethod(?int $shippingTaxComputationMethod): self
    {
        $this->shippingTaxComputationMethod = $shippingTaxComputationMethod;

        return $this;
    }

    public function getTotalWrappingTaxExcl(): ?float
    {
        return $this->totalWrappingTaxExcl;
    }

    public function setTotalWrappingTaxExcl(?float $totalWrappingTaxExcl): self
    {
        $this->totalWrappingTaxExcl = $totalWrappingTaxExcl;

        return $this;
    }

    public function getTotalWrappingTaxIncl(): ?float
    {
        return $this->totalWrappingTaxIncl;
    }

    public function setTotalWrappingTaxIncl(?float $totalWrappingTaxIncl): self
    {
        $this->totalWrappingTaxIncl = $totalWrappingTaxIncl;

        return $this;
    }

    public function getShopAddress(): ?string
    {
        return $this->shopAddress;
    }

    public function setShopAddress(?string $shopAddress): self
    {
        $this->shopAddress = $shopAddress;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

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
