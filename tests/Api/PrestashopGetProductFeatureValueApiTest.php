<?php

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopItem;
use Scraper\ScraperPrestashop\Entity\PrestashopProductFeatureValue;
use Scraper\ScraperPrestashop\Entity\PrestashopProductFeatureValues;

/**
 * @internal
 */
class PrestashopGetProductFeatureValueApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopProductFeatureValue $result */
        $result = $this->executeGetApi(
            'product_feature_values',
            1,
            200,
            'product_feature_value.json'
        );

        $this->assertInstanceOf(PrestashopProductFeatureValue::class, $result);

        $this->assertEquals(1, $result->getId());
        $this->assertEquals(1, $result->getIdFeature());

        $this->assertCount(1, $result->getValue());
        $this->assertInstanceOf(PrestashopItem::class, $result->getValue()->first());
    }

    public function testMultilang(): void
    {
        /** @var PrestashopProductFeatureValue $result */
        $result = $this->executeGetApi(
            'product_feature_values',
            1,
            200,
            'product_feature_value_multilang.json'
        );

        $this->assertInstanceOf(PrestashopProductFeatureValue::class, $result);

        $this->assertEquals(1, $result->getId());
        $this->assertEquals(1, $result->getIdFeature());

        $this->assertCount(2, $result->getValue());
        $this->assertInstanceOf(PrestashopItem::class, $result->getValue()->first());
    }

    public function testList(): void
    {
        /** @var PrestashopProductFeatureValues $result */
        $result = $this->executeGetApi(
            'product_feature_values',
            null,
            200,
            'product_feature_values.json'
        );

        $this->assertInstanceOf(PrestashopProductFeatureValues::class, $result);
        $this->assertCount(2, $result->getProductFeatureValues());
        $this->assertInstanceOf(PrestashopProductFeatureValue::class, $result->getProductFeatureValues()->first());
    }
}
