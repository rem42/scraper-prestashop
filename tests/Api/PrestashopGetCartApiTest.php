<?php declare(strict_types=1);

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

        $this->assertEquals(1, $result->id);
        $this->assertEquals(2, $result->idCustomer);

        $this->assertInstanceOf(PrestashopAssociations::class, $result->associations);

        $this->assertCount(2, $result->associations->cartRows);

        $this->assertInstanceOf(PrestashopCartRow::class, $result->associations->cartRows[0]);
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
        $this->assertCount(2, $result->carts);
        $this->assertInstanceOf(PrestashopCart::class, $result->carts[0]);
    }
}
