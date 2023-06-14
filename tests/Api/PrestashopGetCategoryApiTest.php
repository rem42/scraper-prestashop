<?php declare(strict_types=1);

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

        $this->assertEquals(1, $result->id);
        $this->assertEquals(0, $result->idParent);

        $this->assertCount(1, $result->name);
        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);

        $this->assertCount(1, $result->linkRewrite);
        $this->assertInstanceOf(PrestashopItem::class, $result->linkRewrite[0]);

        $this->assertCount(1, $result->description);
        $this->assertInstanceOf(PrestashopItem::class, $result->description[0]);

        $this->assertCount(1, $result->metaTitle);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaTitle[0]);

        $this->assertCount(1, $result->metaDescription);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaDescription[0]);

        $this->assertCount(1, $result->metaKeywords);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaKeywords[0]);
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

        $this->assertEquals(1, $result->id);
        $this->assertEquals(0, $result->idParent);

        $this->assertCount(2, $result->name);
        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);

        $this->assertCount(2, $result->linkRewrite);
        $this->assertInstanceOf(PrestashopItem::class, $result->linkRewrite[0]);

        $this->assertCount(2, $result->description);
        $this->assertInstanceOf(PrestashopItem::class, $result->description[0]);

        $this->assertCount(2, $result->metaTitle);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaTitle[0]);

        $this->assertCount(2, $result->metaDescription);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaDescription[0]);

        $this->assertCount(2, $result->metaKeywords);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaKeywords[0]);
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
        $this->assertCount(2, $result->categories);
        $this->assertInstanceOf(PrestashopCategory::class, $result->categories[0]);
    }
}
