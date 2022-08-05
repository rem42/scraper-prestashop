<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderState
{
    /** @var array<int, PrestashopItem> */
    public array $name = [];
    /** @var array<int, PrestashopItem> */
    public array $template = [];
    public ?int $id = null;
    public ?bool $unremovable = null;
    public ?bool $delivery = null;
    public ?bool $hidden = null;
    public ?bool $sendEmail = null;
    public ?string $moduleName = null;
    public ?bool $invoice = null;
    public ?string $color = null;
    public ?bool $logable = null;
    public ?bool $shipped = null;
    public ?bool $paid = null;
    public ?bool $pdfDelivery = null;
    public ?bool $pdfInvoice = null;
    public ?bool $deleted = null;

    public function addName(PrestashopItem $name): self
    {
        $this->name[] = $name;

        return $this;
    }

    public function addTemplate(PrestashopItem $template): self
    {
        $this->template[] = $template;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setUnremovable(?bool $unremovable): self
    {
        $this->unremovable = $unremovable;
        return $this;
    }

    public function setDelivery(?bool $delivery): self
    {
        $this->delivery = $delivery;
        return $this;
    }

    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;
        return $this;
    }

    public function setSendEmail(?bool $sendEmail): self
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    public function setModuleName(?string $moduleName): self
    {
        $this->moduleName = $moduleName;
        return $this;
    }

    public function setInvoice(?bool $invoice): self
    {
        $this->invoice = $invoice;
        return $this;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function setLogable(?bool $logable): self
    {
        $this->logable = $logable;
        return $this;
    }

    public function setShipped(?bool $shipped): self
    {
        $this->shipped = $shipped;
        return $this;
    }

    public function setPaid(?bool $paid): self
    {
        $this->paid = $paid;
        return $this;
    }

    public function setPdfDelivery(?bool $pdfDelivery): self
    {
        $this->pdfDelivery = $pdfDelivery;
        return $this;
    }

    public function setPdfInvoice(?bool $pdfInvoice): self
    {
        $this->pdfInvoice = $pdfInvoice;
        return $this;
    }

    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;
        return $this;
    }
}
