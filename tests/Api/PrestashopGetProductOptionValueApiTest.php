<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopItem;
use Scraper\ScraperPrestashop\Entity\PrestashopProductOptionValue;
use Scraper\ScraperPrestashop\Entity\PrestashopProductOptionValues;

/**
 * @internal
 */
class PrestashopGetProductOptionValueApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopProductOptionValue $result */
        $result = $this->executeGetApi(
            'product_option_values',
            1,
            200,
            'product_option_value.json'
        );

        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result);

        $this->assertEquals(1, $result->id);

        $this->assertCount(1, $result->name);
        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);
    }

    public function testMultilang(): void
    {
        /** @var PrestashopProductOptionValue $result */
        $result = $this->executeGetApi(
            'product_option_values',
            1,
            200,
            'product_option_value_multilang.json'
        );

        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result);

        $this->assertEquals(1, $result->id);

        $this->assertCount(2, $result->name);
        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);
    }

    public function testList(): void
    {
        /** @var PrestashopProductOptionValues $result */
        $result = $this->executeGetApi(
            'product_option_values',
            null,
            200,
            'product_option_values.json'
        );

        $this->assertInstanceOf(PrestashopProductOptionValues::class, $result);
        $this->assertCount(2, $result->productOptionValues);
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->productOptionValues[0]);
    }
}
