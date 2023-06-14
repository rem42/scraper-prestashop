<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopAssociations;
use Scraper\ScraperPrestashop\Entity\PrestashopCategory;
use Scraper\ScraperPrestashop\Entity\PrestashopCombination;
use Scraper\ScraperPrestashop\Entity\PrestashopImage;
use Scraper\ScraperPrestashop\Entity\PrestashopItem;
use Scraper\ScraperPrestashop\Entity\PrestashopProduct;
use Scraper\ScraperPrestashop\Entity\PrestashopProductBundle;
use Scraper\ScraperPrestashop\Entity\PrestashopProductFeature;
use Scraper\ScraperPrestashop\Entity\PrestashopProductOptionValue;
use Scraper\ScraperPrestashop\Entity\PrestashopProducts;
use Scraper\ScraperPrestashop\Entity\PrestashopStockAvailable;

/**
 * @internal
 */
class PrestashopGetProductApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopProduct $result */
        $result = $this->executeGetApi(
            'products',
            1,
            200,
            'product.json'
        );

        $this->assertInstanceOf(PrestashopProduct::class, $result);

        $this->assertEquals(1, $result->id);

        $this->assertCount(1, $result->deliveryInStock);
        $this->assertInstanceOf(PrestashopItem::class, $result->deliveryInStock[0]);

        $this->assertCount(1, $result->deliveryOutStock);
        $this->assertInstanceOf(PrestashopItem::class, $result->deliveryOutStock[0]);

        $this->assertCount(1, $result->metaDescription);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaDescription[0]);

        $this->assertCount(1, $result->metaKeywords);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaKeywords[0]);

        $this->assertCount(1, $result->metaTitle);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaTitle[0]);

        $this->assertCount(1, $result->linkRewrite);
        $this->assertInstanceOf(PrestashopItem::class, $result->linkRewrite[0]);

        $this->assertCount(1, $result->name);
        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);

        $this->assertCount(1, $result->description);
        $this->assertInstanceOf(PrestashopItem::class, $result->description[0]);

        $this->assertCount(1, $result->descriptionShort);
        $this->assertInstanceOf(PrestashopItem::class, $result->descriptionShort[0]);

        $this->assertCount(1, $result->availableNow);
        $this->assertInstanceOf(PrestashopItem::class, $result->availableNow[0]);

        $this->assertCount(1, $result->availableLater);
        $this->assertInstanceOf(PrestashopItem::class, $result->availableLater[0]);

        $this->assertInstanceOf(PrestashopAssociations::class, $result->associations);

        $this->assertCount(3, $result->associations->categories);
        $this->assertInstanceOf(PrestashopCategory::class, $result->associations->categories[0]);

        $this->assertCount(2, $result->associations->images);
        $this->assertInstanceOf(PrestashopImage::class, $result->associations->images[0]);

        $this->assertCount(8, $result->associations->combinations);
        $this->assertInstanceOf(PrestashopCombination::class, $result->associations->combinations[0]);

        $this->assertCount(6, $result->associations->productOptionValues);
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->associations->productOptionValues[0]);

        $this->assertCount(2, $result->associations->productFeatures);
        $this->assertInstanceOf(PrestashopProductFeature::class, $result->associations->productFeatures[0]);

        $this->assertCount(9, $result->associations->stockAvailables);
        $this->assertInstanceOf(PrestashopStockAvailable::class, $result->associations->stockAvailables[0]);

        $this->assertCount(2, $result->associations->productBundle);
        $this->assertInstanceOf(PrestashopProductBundle::class, $result->associations->productBundle[0]);
    }

    public function testMultilang(): void
    {
        /** @var PrestashopProduct $result */
        $result = $this->executeGetApi(
            'products',
            1,
            200,
            'product_multilang.json'
        );

        $this->assertInstanceOf(PrestashopProduct::class, $result);

        $this->assertEquals(1, $result->id);

        $this->assertCount(2, $result->deliveryInStock);
        $this->assertInstanceOf(PrestashopItem::class, $result->deliveryInStock[0]);

        $this->assertCount(2, $result->deliveryOutStock);
        $this->assertInstanceOf(PrestashopItem::class, $result->deliveryOutStock[0]);

        $this->assertCount(2, $result->metaDescription);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaDescription[0]);

        $this->assertCount(2, $result->metaKeywords);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaKeywords[0]);

        $this->assertCount(2, $result->metaTitle);
        $this->assertInstanceOf(PrestashopItem::class, $result->metaTitle[0]);

        $this->assertCount(2, $result->linkRewrite);
        $this->assertInstanceOf(PrestashopItem::class, $result->linkRewrite[0]);

        $this->assertCount(2, $result->name);
        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);

        $this->assertCount(2, $result->description);
        $this->assertInstanceOf(PrestashopItem::class, $result->description[0]);

        $this->assertCount(2, $result->descriptionShort);
        $this->assertInstanceOf(PrestashopItem::class, $result->descriptionShort[0]);

        $this->assertCount(2, $result->availableNow);
        $this->assertInstanceOf(PrestashopItem::class, $result->availableNow[0]);

        $this->assertCount(2, $result->availableLater);
        $this->assertInstanceOf(PrestashopItem::class, $result->availableLater[0]);

        $this->assertInstanceOf(PrestashopAssociations::class, $result->associations);

        $this->assertCount(3, $result->associations->categories);
        $this->assertInstanceOf(PrestashopCategory::class, $result->associations->categories[0]);

        $this->assertCount(2, $result->associations->images);
        $this->assertInstanceOf(PrestashopImage::class, $result->associations->images[0]);

        $this->assertCount(8, $result->associations->combinations);
        $this->assertInstanceOf(PrestashopCombination::class, $result->associations->combinations[0]);

        $this->assertCount(6, $result->associations->productOptionValues);
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->associations->productOptionValues[0]);

        $this->assertCount(2, $result->associations->productFeatures);
        $this->assertInstanceOf(PrestashopProductFeature::class, $result->associations->productFeatures[0]);

        $this->assertCount(9, $result->associations->stockAvailables);
        $this->assertInstanceOf(PrestashopStockAvailable::class, $result->associations->stockAvailables[0]);

        $this->assertCount(2, $result->associations->productBundle);
        $this->assertInstanceOf(PrestashopProductBundle::class, $result->associations->productBundle[0]);
    }

    public function testList(): void
    {
        /** @var PrestashopProducts $result */
        $result = $this->executeGetApi(
            'products',
            null,
            200,
            'products.json'
        );

        $this->assertInstanceOf(PrestashopProducts::class, $result);
        $this->assertCount(2, $result->products);
        $this->assertInstanceOf(PrestashopProduct::class, $result->products[0]);
    }
}
