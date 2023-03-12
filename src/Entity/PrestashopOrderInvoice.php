<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderInvoice
{
    public ?int $id = null;
    public ?int $idOrder = null;
    public ?int $number = null;
    public ?int $deliveryNumber = null;
    public ?\DateTimeInterface $deliveryDate = null;
    public ?float $totalDiscountTaxExcl = null;
    public ?float $totalDiscountTaxIncl = null;
    public ?float $totalPaidTaxExcl = null;
    public ?float $totalPaidTaxIncl = null;
    public ?float $totalProducts = null;
    public ?float $totalProductsWt = null;
    public ?float $totalShippingTaxExcl = null;
    public ?float $totalShippingTaxIncl = null;
    public ?int $shippingTaxComputationMethod = null;
    public ?float $totalWrappingTaxExcl = null;
    public ?float $totalWrappingTaxIncl = null;
    public ?string $shopAddress = null;
    public ?string $note = null;
    public ?\DateTimeInterface $dateAdd = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;
        return $this;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function setDeliveryNumber(?int $deliveryNumber): self
    {
        $this->deliveryNumber = $deliveryNumber;
        return $this;
    }

    public function setDeliveryDate(?\DateTimeInterface $deliveryDate): self
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    public function setTotalDiscountTaxExcl(?float $totalDiscountTaxExcl): self
    {
        $this->totalDiscountTaxExcl = $totalDiscountTaxExcl;
        return $this;
    }

    public function setTotalDiscountTaxIncl(?float $totalDiscountTaxIncl): self
    {
        $this->totalDiscountTaxIncl = $totalDiscountTaxIncl;
        return $this;
    }

    public function setTotalPaidTaxExcl(?float $totalPaidTaxExcl): self
    {
        $this->totalPaidTaxExcl = $totalPaidTaxExcl;
        return $this;
    }

    public function setTotalPaidTaxIncl(?float $totalPaidTaxIncl): self
    {
        $this->totalPaidTaxIncl = $totalPaidTaxIncl;
        return $this;
    }

    public function setTotalProducts(?float $totalProducts): self
    {
        $this->totalProducts = $totalProducts;
        return $this;
    }

    public function setTotalProductsWt(?float $totalProductsWt): self
    {
        $this->totalProductsWt = $totalProductsWt;
        return $this;
    }

    public function setTotalShippingTaxExcl(?float $totalShippingTaxExcl): self
    {
        $this->totalShippingTaxExcl = $totalShippingTaxExcl;
        return $this;
    }

    public function setTotalShippingTaxIncl(?float $totalShippingTaxIncl): self
    {
        $this->totalShippingTaxIncl = $totalShippingTaxIncl;
        return $this;
    }

    public function setShippingTaxComputationMethod(?int $shippingTaxComputationMethod): self
    {
        $this->shippingTaxComputationMethod = $shippingTaxComputationMethod;
        return $this;
    }

    public function setTotalWrappingTaxExcl(?float $totalWrappingTaxExcl): self
    {
        $this->totalWrappingTaxExcl = $totalWrappingTaxExcl;
        return $this;
    }

    public function setTotalWrappingTaxIncl(?float $totalWrappingTaxIncl): self
    {
        $this->totalWrappingTaxIncl = $totalWrappingTaxIncl;
        return $this;
    }

    public function setShopAddress(?string $shopAddress): self
    {
        $this->shopAddress = $shopAddress;
        return $this;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }
}
