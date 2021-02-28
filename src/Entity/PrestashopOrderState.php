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
        $this->name     = new ArrayCollection();
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

    /**
     * @return PrestashopOrderState
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUnremovable(): ?bool
    {
        return $this->unremovable;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setUnremovable(?bool $unremovable): self
    {
        $this->unremovable = $unremovable;

        return $this;
    }

    public function getDelivery(): ?bool
    {
        return $this->delivery;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setDelivery(?bool $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;

        return $this;
    }

    public function getSendEmail(): ?bool
    {
        return $this->sendEmail;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setSendEmail(?bool $sendEmail): self
    {
        $this->sendEmail = $sendEmail;

        return $this;
    }

    public function getModuleName(): ?string
    {
        return $this->moduleName;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setModuleName(?string $moduleName): self
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    public function getInvoice(): ?bool
    {
        return $this->invoice;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setInvoice(?bool $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getLogable(): ?bool
    {
        return $this->logable;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setLogable(?bool $logable): self
    {
        $this->logable = $logable;

        return $this;
    }

    public function getShipped(): ?bool
    {
        return $this->shipped;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setShipped(?bool $shipped): self
    {
        $this->shipped = $shipped;

        return $this;
    }

    public function getPaid(): ?bool
    {
        return $this->paid;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setPaid(?bool $paid): self
    {
        $this->paid = $paid;

        return $this;
    }

    public function getPdfDelivery(): ?bool
    {
        return $this->pdfDelivery;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setPdfDelivery(?bool $pdfDelivery): self
    {
        $this->pdfDelivery = $pdfDelivery;

        return $this;
    }

    public function getPdfInvoice(): ?bool
    {
        return $this->pdfInvoice;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setPdfInvoice(?bool $pdfInvoice): self
    {
        $this->pdfInvoice = $pdfInvoice;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    /**
     * @return PrestashopOrderState
     */
    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }
}
