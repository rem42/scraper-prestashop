<?php

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopAssociations;
use Scraper\ScraperPrestashop\Entity\PrestashopCategory;
use Scraper\ScraperPrestashop\Entity\PrestashopCombination;
use Scraper\ScraperPrestashop\Entity\PrestashopImage;
use Scraper\ScraperPrestashop\Entity\PrestashopItem;
use Scraper\ScraperPrestashop\Entity\PrestashopProduct;
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

        $this->assertEquals(1, $result->getId());

        $this->assertCount(1, $result->getDeliveryInStock());
        $this->assertInstanceOf(PrestashopItem::class, $result->getDeliveryInStock()->first());

        $this->assertCount(1, $result->getDeliveryOutStock());
        $this->assertInstanceOf(PrestashopItem::class, $result->getDeliveryOutStock()->first());

        $this->assertCount(1, $result->getMetaDescription());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaDescription()->first());

        $this->assertCount(1, $result->getMetaKeywords());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaKeywords()->first());

        $this->assertCount(1, $result->getMetaTitle());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaTitle()->first());

        $this->assertCount(1, $result->getLinkRewrite());
        $this->assertInstanceOf(PrestashopItem::class, $result->getLinkRewrite()->first());

        $this->assertCount(1, $result->getName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());

        $this->assertCount(1, $result->getDescription());
        $this->assertInstanceOf(PrestashopItem::class, $result->getDescription()->first());

        $this->assertCount(1, $result->getDescriptionShort());
        $this->assertInstanceOf(PrestashopItem::class, $result->getDescriptionShort()->first());

        $this->assertCount(1, $result->getAvailableNow());
        $this->assertInstanceOf(PrestashopItem::class, $result->getAvailableNow()->first());

        $this->assertCount(1, $result->getAvailableLater());
        $this->assertInstanceOf(PrestashopItem::class, $result->getAvailableLater()->first());

        $this->assertInstanceOf(PrestashopAssociations::class, $result->getAssociations());

        $this->assertCount(3, $result->getAssociations()->getCategories());
        $this->assertInstanceOf(PrestashopCategory::class, $result->getAssociations()->getCategories()->first());

        $this->assertCount(2, $result->getAssociations()->getImages());
        $this->assertInstanceOf(PrestashopImage::class, $result->getAssociations()->getImages()->first());

        $this->assertCount(8, $result->getAssociations()->getCombinations());
        $this->assertInstanceOf(PrestashopCombination::class, $result->getAssociations()->getCombinations()->first());

        $this->assertCount(6, $result->getAssociations()->getProductOptionValues());
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->getAssociations()->getProductOptionValues()->first());

        $this->assertCount(2, $result->getAssociations()->getProductFeatures());
        $this->assertInstanceOf(PrestashopProductFeature::class, $result->getAssociations()->getProductFeatures()->first());

        $this->assertCount(9, $result->getAssociations()->getStockAvailables());
        $this->assertInstanceOf(PrestashopStockAvailable::class, $result->getAssociations()->getStockAvailables()->first());
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

        $this->assertEquals(1, $result->getId());

        $this->assertCount(2, $result->getDeliveryInStock());
        $this->assertInstanceOf(PrestashopItem::class, $result->getDeliveryInStock()->first());

        $this->assertCount(2, $result->getDeliveryOutStock());
        $this->assertInstanceOf(PrestashopItem::class, $result->getDeliveryOutStock()->first());

        $this->assertCount(2, $result->getMetaDescription());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaDescription()->first());

        $this->assertCount(2, $result->getMetaKeywords());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaKeywords()->first());

        $this->assertCount(2, $result->getMetaTitle());
        $this->assertInstanceOf(PrestashopItem::class, $result->getMetaTitle()->first());

        $this->assertCount(2, $result->getLinkRewrite());
        $this->assertInstanceOf(PrestashopItem::class, $result->getLinkRewrite()->first());

        $this->assertCount(2, $result->getName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());

        $this->assertCount(2, $result->getDescription());
        $this->assertInstanceOf(PrestashopItem::class, $result->getDescription()->first());

        $this->assertCount(2, $result->getDescriptionShort());
        $this->assertInstanceOf(PrestashopItem::class, $result->getDescriptionShort()->first());

        $this->assertCount(2, $result->getAvailableNow());
        $this->assertInstanceOf(PrestashopItem::class, $result->getAvailableNow()->first());

        $this->assertCount(2, $result->getAvailableLater());
        $this->assertInstanceOf(PrestashopItem::class, $result->getAvailableLater()->first());

        $this->assertInstanceOf(PrestashopAssociations::class, $result->getAssociations());

        $this->assertCount(3, $result->getAssociations()->getCategories());
        $this->assertInstanceOf(PrestashopCategory::class, $result->getAssociations()->getCategories()->first());

        $this->assertCount(2, $result->getAssociations()->getImages());
        $this->assertInstanceOf(PrestashopImage::class, $result->getAssociations()->getImages()->first());

        $this->assertCount(8, $result->getAssociations()->getCombinations());
        $this->assertInstanceOf(PrestashopCombination::class, $result->getAssociations()->getCombinations()->first());

        $this->assertCount(6, $result->getAssociations()->getProductOptionValues());
        $this->assertInstanceOf(PrestashopProductOptionValue::class, $result->getAssociations()->getProductOptionValues()->first());

        $this->assertCount(2, $result->getAssociations()->getProductFeatures());
        $this->assertInstanceOf(PrestashopProductFeature::class, $result->getAssociations()->getProductFeatures()->first());

        $this->assertCount(9, $result->getAssociations()->getStockAvailables());
        $this->assertInstanceOf(PrestashopStockAvailable::class, $result->getAssociations()->getStockAvailables()->first());
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
        $this->assertCount(2, $result->getProducts());
        $this->assertInstanceOf(PrestashopProduct::class, $result->getProducts()->first());
    }
}
