<?php

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopCategories;
use Scraper\ScraperPrestashop\Entity\PrestashopCategory;
use Scraper\ScraperPrestashop\Entity\PrestashopItem;

/**
 * @internal
 */
class PrestashopGetCategoryApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopCategory $result */
        $result = $this->executeGetApi(
            'categories',
            1,
            200,
            'category.json'
        );

        $this->assertInstanceOf(PrestashopCategory::class, $result);

        $this->assertEquals(1, $result->getId());
        $this->assertEquals(0, $result->getIdParent());

        $this->assertCount(1, $result->getName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());

        $this->assertCount(1, $result->getLinkRewrite());
        $this->assertInstanceOf(PrestashopItem::class, $result->getLinkRewrite()->first());

        $this->assertCount(1, $result->getDescription());
        $this->assertInstanceOf(PrestashopItem::class, $result->getDescription()->first());

        $this->assertCount(1, $result->getMetaTitle());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaTitle()->first());

        $this->assertCount(1, $result->getMetaDescription());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaDescription()->first());

        $this->assertCount(1, $result->getMetaKeywords());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaKeywords()->first());
    }

    public function testMulitlang(): void
    {
        /** @var PrestashopCategory $result */
        $result = $this->executeGetApi(
            'categories',
            1,
            200,
            'category_multilang.json'
        );

        $this->assertInstanceOf(PrestashopCategory::class, $result);

        $this->assertEquals(1, $result->getId());
        $this->assertEquals(0, $result->getIdParent());

        $this->assertCount(2, $result->getName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());

        $this->assertCount(2, $result->getLinkRewrite());
        $this->assertInstanceOf(PrestashopItem::class, $result->getLinkRewrite()->first());

        $this->assertCount(2, $result->getDescription());
        $this->assertInstanceOf(PrestashopItem::class, $result->getDescription()->first());

        $this->assertCount(2, $result->getMetaTitle());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaTitle()->first());

        $this->assertCount(2, $result->getMetaDescription());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaDescription()->first());

        $this->assertCount(2, $result->getMetaKeywords());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaKeywords()->first());
    }

    public function testList(): void
    {
        /** @var PrestashopCategories $result */
        $result = $this->executeGetApi(
            'categories',
            null,
            200,
            'categories.json'
        );

        $this->assertInstanceOf(PrestashopCategories::class, $result);
        $this->assertCount(2, $result->getCategories());
        $this->assertInstanceOf(PrestashopCategory::class, $result->getCategories()->first());
    }
}
