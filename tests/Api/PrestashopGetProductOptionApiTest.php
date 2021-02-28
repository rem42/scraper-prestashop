<?php

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

        $this->assertEquals(1, $result->getId());

        $this->assertCount(1, $result->getName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());

        $this->assertCount(1, $result->getPublicName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getPublicName()->first());

        $this->assertCount(4, $result->getAssociations()->getProductOptionValues());
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->getAssociations()->getProductOptionValues()->first());
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

        $this->assertEquals(1, $result->getId());

        $this->assertCount(2, $result->getName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());

        $this->assertCount(2, $result->getPublicName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getPublicName()->first());

        $this->assertInstanceOf(PrestashopAssociations::class, $result->getAssociations());

        $this->assertCount(4, $result->getAssociations()->getProductOptionValues());
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->getAssociations()->getProductOptionValues()->first());
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
        $this->assertCount(2, $result->getProductOptions());
        $this->assertInstanceOf(PrestashopProductOption::class, $result->getProductOptions()->first());
    }
}
