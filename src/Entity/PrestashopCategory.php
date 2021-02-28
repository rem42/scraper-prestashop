<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopCategory
{
    private ?int $id = null;

    private ?int $idParent = null;

    private ?int $levelDepth = null;

    private ?int $nbProductsRecursive = null;

    private ?int $active = null;

    private ?int $idShopDefault = null;

    private ?int $isRootCategory = null;

    private ?int $position = null;

    private ?\DateTimeInterface $dateAdd = null;

    private ?\DateTimeInterface $dateUpd = null;

    /** @var Collection<int, PrestashopItem> */
    private Collection $name;

    /** @var Collection<int, PrestashopItem> */
    private Collection $linkRewrite;

    /** @var Collection<int, PrestashopItem> */
    private Collection $description;

    /** @var Collection<int, PrestashopItem> */
    private Collection $metaTitle;

    /** @var Collection<int, PrestashopItem> */
    private Collection $metaDescription;

    /** @var Collection<int, PrestashopItem> */
    private Collection $metaKeywords;

    public function __construct()
    {
        $this->name            = new ArrayCollection();
        $this->linkRewrite     = new ArrayCollection();
        $this->description     = new ArrayCollection();
        $this->metaTitle       = new ArrayCollection();
        $this->metaDescription = new ArrayCollection();
        $this->metaKeywords    = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdParent(): ?int
    {
        return $this->idParent;
    }

    public function getLevelDepth(): ?int
    {
        return $this->levelDepth;
    }

    public function getNbProductsRecursive(): ?int
    {
        return $this->nbProductsRecursive;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function getIdShopDefault(): ?int
    {
        return $this->idShopDefault;
    }

    public function getIsRootCategory(): ?int
    {
        return $this->isRootCategory;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function getDateUpd(): ?\DateTimeInterface
    {
        return $this->dateUpd;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getName(): Collection
    {
        return $this->name;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getLinkRewrite(): Collection
    {
        return $this->linkRewrite;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getDescription(): Collection
    {
        return $this->description;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getMetaTitle(): Collection
    {
        return $this->metaTitle;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getMetaDescription(): Collection
    {
        return $this->metaDescription;
    }

    /**
     * @return Collection<int, PrestashopItem>
     */
    public function getMetaKeywords(): Collection
    {
        return $this->metaKeywords;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setIdParent(?int $idParent): self
    {
        $this->idParent = $idParent;

        return $this;
    }

    public function setLevelDepth(?int $levelDepth): self
    {
        $this->levelDepth = $levelDepth;

        return $this;
    }

    public function setNbProductsRecursive(?int $nbProductsRecursive): self
    {
        $this->nbProductsRecursive = $nbProductsRecursive;

        return $this;
    }

    public function setActive(?int $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function setIdShopDefault(?int $idShopDefault): self
    {
        $this->idShopDefault = $idShopDefault;

        return $this;
    }

    public function setIsRootCategory(?int $isRootCategory): self
    {
        $this->isRootCategory = $isRootCategory;

        return $this;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function setDateUpd(?\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
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

    public function addLinkRewrite(PrestashopItem $linkRewrite): self
    {
        $this->linkRewrite->add($linkRewrite);

        return $this;
    }

    public function removeLinkRewrite(PrestashopItem $linkRewrite): self
    {
        $this->linkRewrite->removeElement($linkRewrite);

        return $this;
    }

    public function addDescription(PrestashopItem $description): self
    {
        $this->description->add($description);

        return $this;
    }

    public function removeDescription(PrestashopItem $description): self
    {
        $this->description->removeElement($description);

        return $this;
    }

    public function addMetaTitle(PrestashopItem $metaTitle): self
    {
        $this->metaTitle->add($metaTitle);

        return $this;
    }

    public function removeMetaTitle(PrestashopItem $metaTitle): self
    {
        $this->metaTitle->removeElement($metaTitle);

        return $this;
    }

    public function addMetaDescription(PrestashopItem $metaDescription): self
    {
        $this->metaDescription->add($metaDescription);

        return $this;
    }

    public function removeMetaDescription(PrestashopItem $metaDescription): self
    {
        $this->metaDescription->removeElement($metaDescription);

        return $this;
    }

    public function addMetaKeyword(PrestashopItem $metaKeyword): self
    {
        $this->metaKeywords->add($metaKeyword);

        return $this;
    }

    public function removeMetaKeyword(PrestashopItem $metaKeyword): self
    {
        $this->metaKeywords->removeElement($metaKeyword);

        return $this;
    }
}
