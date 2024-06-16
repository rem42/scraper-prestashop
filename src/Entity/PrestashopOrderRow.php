<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

use Scraper\ScraperPrestashop\Entity\CadoMaestro\PrestashopPackagingDecoded;

final class PrestashopOrderRow
{
    public ?int $id = null;
    public ?int $productId = null;
    public ?int $productAttributeId = null;
    public ?int $productQuantity = null;
    public ?string $productName = null;
    public ?string $productReference = null;
    public ?string $productEan13 = null;
    public ?string $productIsbn = null;
    public ?string $productUpc = null;
    public ?float $productPrice = null;
    public ?float $unitPriceTaxIncl = null;
    public ?float $unitPriceTaxExcl = null;
    public ?int $idConfig = null;
    public ?PrestashopPackagingDecoded $packagingDecoded = null;
    public ?string $packaging = null;

    public function setProductEan13(?string $productEan13): self
    {
        $this->productEan13 = $productEan13;
        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    public function setProductAttributeId(?int $productAttributeId): self
    {
        $this->productAttributeId = $productAttributeId;
        return $this;
    }

    public function setProductQuantity(?int $productQuantity): self
    {
        $this->productQuantity = $productQuantity;
        return $this;
    }

    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    public function setProductReference(?string $productReference): self
    {
        $this->productReference = $productReference;
        return $this;
    }

    public function setProductIsbn(?string $productIsbn): self
    {
        $this->productIsbn = $productIsbn;
        return $this;
    }

    public function setProductUpc(?string $productUpc): self
    {
        $this->productUpc = $productUpc;
        return $this;
    }

    public function setProductPrice(?float $productPrice): self
    {
        $this->productPrice = $productPrice;
        return $this;
    }

    public function setUnitPriceTaxIncl(?float $unitPriceTaxIncl): self
    {
        $this->unitPriceTaxIncl = $unitPriceTaxIncl;
        return $this;
    }

    public function setUnitPriceTaxExcl(?float $unitPriceTaxExcl): self
    {
        $this->unitPriceTaxExcl = $unitPriceTaxExcl;
        return $this;
    }
}
