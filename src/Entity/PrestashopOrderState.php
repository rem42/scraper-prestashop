<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopOrderState
{
    /** @var Collection<int, PrestashopItem> */
    private Collection $name;

    /** @var Collection<int, PrestashopItem> */
    private Collection $template;

    private ?int $id = null;

    private ?bool $unremovable = null;

    private ?bool $delivery = null;

    private ?bool $hidden = null;

    private ?bool $sendEmail = null;

    private ?string $moduleName = null;

    private ?bool $invoice = null;

    private ?string $color = null;

    private ?bool $logable = null;

    private ?bool $shipped = null;

    private ?bool $paid = null;

    private ?bool $pdfDelivery = null;

    private ?bool $pdfInvoice = null;

    private ?bool $deleted = null;

    public function __construct()
    {
        $this->name = new ArrayCollection();
        $this->template = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getName(): Collection
    {
        return $this->name;
    }

    public function addName(PrestashopItem $name): self
    {
        $this->name->add($name);

        return $this;
    }

    public function removeName(PrestashopItem $name): self
    {
        $this->name->removeElement($name);

        return $this;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getTemplate(): Collection
    {
        return $this->template;
    }

    public function addTemplate(PrestashopItem $template): self
    {
        $this->template->add($template);

        return $this;
    }

    public function removeTemplate(PrestashopItem $template): self
    {
        $this->template->removeElement($template);

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

    public function isUnremovable(): ?bool
    {
        return $this->unremovable;
    }

    public function setUnremovable(?bool $unremovable): self
    {
        $this->unremovable = $unremovable;

        return $this;
    }

    public function isDelivery(): ?bool
    {
        return $this->delivery;
    }

    public function setDelivery(?bool $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function isHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;

        return $this;
    }

    public function isSendEmail(): ?bool
    {
        return $this->sendEmail;
    }

    public function setSendEmail(?bool $sendEmail): self
    {
        $this->sendEmail = $sendEmail;

        return $this;
    }

    public function getModuleName(): ?string
    {
        return $this->moduleName;
    }

    public function setModuleName(?string $moduleName): self
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    public function isInvoice(): ?bool
    {
        return $this->invoice;
    }

    public function setInvoice(?bool $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function isLogable(): ?bool
    {
        return $this->logable;
    }

    public function setLogable(?bool $logable): self
    {
        $this->logable = $logable;

        return $this;
    }

    public function isShipped(): ?bool
    {
        return $this->shipped;
    }

    public function setShipped(?bool $shipped): self
    {
        $this->shipped = $shipped;

        return $this;
    }

    public function isPaid(): ?bool
    {
        return $this->paid;
    }

    public function setPaid(?bool $paid): self
    {
        $this->paid = $paid;

        return $this;
    }

    public function isPdfDelivery(): ?bool
    {
        return $this->pdfDelivery;
    }

    public function setPdfDelivery(?bool $pdfDelivery): self
    {
        $this->pdfDelivery = $pdfDelivery;

        return $this;
    }

    public function isPdfInvoice(): ?bool
    {
        return $this->pdfInvoice;
    }

    public function setPdfInvoice(?bool $pdfInvoice): self
    {
        $this->pdfInvoice = $pdfInvoice;

        return $this;
    }

    public function isDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }
}
