<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopAssociations;
use Scraper\ScraperPrestashop\Entity\PrestashopItem;
use Scraper\ScraperPrestashop\Entity\PrestashopProductOption;
use Scraper\ScraperPrestashop\Entity\PrestashopProductOptions;
use Scraper\ScraperPrestashop\Entity\PrestashopProductOptionValue;

/**
 * @internal
 */
class PrestashopGetProductOptionApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopProductOption $result */
        $result = $this->executeGetApi(
            'product_options',
            1,
            200,
            'product_option.json'
        );

        $this->assertInstanceOf(PrestashopProductOption::class, $result);

        $this->assertEquals(1, $result->id);

        $this->assertCount(1, $result->name);
        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);

        $this->assertCount(1, $result->publicName);
        $this->assertInstanceOf(PrestashopItem::class, $result->publicName[0]);

        $this->assertCount(4, $result->associations->productOptionValues);
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->associations->productOptionValues[0]);
    }

    public function testMultilang(): void
    {
        /** @var PrestashopProductOption $result */
        $result = $this->executeGetApi(
            'product_options',
            1,
            200,
            'product_option_multilang.json'
        );

        $this->assertInstanceOf(PrestashopProductOption::class, $result);

        $this->assertEquals(1, $result->id);

        $this->assertCount(2, $result->name);
        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);

        $this->assertCount(2, $result->publicName);
        $this->assertInstanceOf(PrestashopItem::class, $result->publicName[0]);

        $this->assertInstanceOf(PrestashopAssociations::class, $result->associations);

        $this->assertCount(4, $result->associations->productOptionValues);
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->associations->productOptionValues[0]);
    }

    public function testList(): void
    {
        /** @var PrestashopProductOptions $result */
        $result = $this->executeGetApi(
            'product_options',
            null,
            200,
            'product_options.json'
        );

        $this->assertInstanceOf(PrestashopProductOptions::class, $result);
        $this->assertCount(2, $result->productOptions);
        $this->assertInstanceOf(PrestashopProductOption::class, $result->productOptions[0]);
    }
}
