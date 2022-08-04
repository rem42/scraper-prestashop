<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopCategory
{
    public ?int $id                     = null;
    public ?int $idParent               = null;
    public ?int $levelDepth             = null;
    public ?int $nbProductsRecursive    = null;
    public ?int $active                 = null;
    public ?int $idShopDefault          = null;
    public ?int $isRootCategory         = null;
    public ?int $position               = null;
    public ?\DateTimeInterface $dateAdd = null;
    public ?\DateTimeInterface $dateUpd = null;
    /** @var array<int, PrestashopItem> */
    public array $name = [];
    /** @var array<int, PrestashopItem> */
    public array $linkRewrite = [];
    /** @var array<int, PrestashopItem> */
    public array $description = [];
    /** @var array<int, PrestashopItem> */
    public array $metaTitle = [];
    /** @var array<int, PrestashopItem> */
    public array $metaDescription = [];
    /** @var array<int, PrestashopItem> */
    public array $metaKeywords = [];

    public function addName(PrestashopItem $name): self
    {
        $this->name[] = $name;

        return $this;
    }

    public function addLinkRewrite(PrestashopItem $linkRewrite): self
    {
        $this->linkRewrite[] = $linkRewrite;

        return $this;
    }

    public function addDescription(PrestashopItem $description): self
    {
        $this->description[] = $description;

        return $this;
    }

    public function addMetaTitle(PrestashopItem $metaTitle): self
    {
        $this->metaTitle[] = $metaTitle;

        return $this;
    }

    public function addMetaDescription(PrestashopItem $metaDescription): self
    {
        $this->metaDescription[] = $metaDescription;

        return $this;
    }

    public function addMetaKeyword(PrestashopItem $metaKeyword): self
    {
        $this->metaKeywords[] = $metaKeyword;

        return $this;
    }
}
