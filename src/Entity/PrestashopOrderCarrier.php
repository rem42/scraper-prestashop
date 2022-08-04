<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderCarrier
{
    public ?int $id                     = null;
    public ?int $idOrder                = null;
    public ?int $idCarrier              = null;
    public ?int $idOrderInvoice         = null;
    public ?float $weight               = null;
    public ?float $shippingCostTaxExcl  = null;
    public ?float $shippingCostTaxIncl  = null;
    public ?string $trackingNumber      = null;
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

    public function setIdCarrier(?int $idCarrier): self
    {
        $this->idCarrier = $idCarrier;
        return $this;
    }

    public function setIdOrderInvoice(?int $idOrderInvoice): self
    {
        $this->idOrderInvoice = $idOrderInvoice;
        return $this;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    public function setShippingCostTaxExcl(?float $shippingCostTaxExcl): self
    {
        $this->shippingCostTaxExcl = $shippingCostTaxExcl;
        return $this;
    }

    public function setShippingCostTaxIncl(?float $shippingCostTaxIncl): self
    {
        $this->shippingCostTaxIncl = $shippingCostTaxIncl;
        return $this;
    }

    public function setTrackingNumber(?string $trackingNumber): self
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }
}
