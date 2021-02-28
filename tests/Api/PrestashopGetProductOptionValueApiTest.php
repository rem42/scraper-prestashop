<?php

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

        $this->assertEquals(1, $result->getId());

        $this->assertCount(1, $result->getName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());
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

        $this->assertEquals(1, $result->getId());

        $this->assertCount(2, $result->getName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());
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
        $this->assertCount(2, $result->getProductOptionValues());
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->getProductOptionValues()->first());
    }
}
