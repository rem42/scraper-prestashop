<?php declare(strict_types=1);

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

        $this->assertEquals(1, $result->id);
        $this->assertEquals(1, $result->idFeature);

        $this->assertCount(1, $result->value);
        $this->assertInstanceOf(PrestashopItem::class, $result->value[0]);
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

        $this->assertEquals(1, $result->id);
        $this->assertEquals(1, $result->idFeature);

        $this->assertCount(2, $result->value);
        $this->assertInstanceOf(PrestashopItem::class, $result->value[0]);
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
        $this->assertCount(2, $result->productFeatureValues);
        $this->assertInstanceOf(PrestashopProductFeatureValue::class, $result->productFeatureValues[0]);
    }
}
