<?php

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopAssociations;
use Scraper\ScraperPrestashop\Entity\PrestashopCart;
use Scraper\ScraperPrestashop\Entity\PrestashopCartRow;
use Scraper\ScraperPrestashop\Entity\PrestashopCarts;

/**
 * @internal
 */
class PrestashopGetCartApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopCart $result */
        $result = $this->executeGetApi(
            'carts',
            1,
            200,
            'cart.json'
        );

        $this->assertInstanceOf(PrestashopCart::class, $result);

        $this->assertEquals(1, $result->getId());
        $this->assertEquals(2, $result->getIdCustomer());

        $this->assertInstanceOf(PrestashopAssociations::class, $result->getAssociations());

        $this->assertCount(2, $result->getAssociations()->getCartRows());

        $this->assertInstanceOf(PrestashopCartRow::class, $result->getAssociations()->getCartRows()->first());
    }

    public function testList(): void
    {
        /** @var PrestashopCarts $result */
        $result = $this->executeGetApi(
            'carts',
            null,
            200,
            'carts.json'
        );

        $this->assertInstanceOf(PrestashopCarts::class, $result);
        $this->assertCount(2, $result->getCarts());
        $this->assertInstanceOf(PrestashopCart::class, $result->getCarts()->first());
    }
}
