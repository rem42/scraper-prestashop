<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopItem;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderState;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderStates;

/**
 * @internal
 */
class PrestashopGetOrderStateApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopOrderState $result */
        $result = $this->executeGetApi(
            'order_states',
            1,
            200,
            'order_state.json'
        );

        $this->assertInstanceOf(PrestashopOrderState::class, $result);

        $this->assertEquals(1, $result->id);

        $this->assertCount(1, $result->name);
        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);

        $this->assertCount(1, $result->template);
        $this->assertInstanceOf(PrestashopItem::class, $result->template[0]);
    }

    public function testMultilang(): void
    {
        /** @var PrestashopOrderState $result */
        $result = $this->executeGetApi(
            'order_states',
            1,
            200,
            'order_state_multilang.json'
        );

        $this->assertInstanceOf(PrestashopOrderState::class, $result);

        $this->assertEquals(1, $result->id);

        $this->assertCount(2, $result->name);
        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);

        $this->assertCount(2, $result->template);
        $this->assertInstanceOf(PrestashopItem::class, $result->template[0]);
    }

    public function testList(): void
    {
        /** @var PrestashopOrderStates $result */
        $result = $this->executeGetApi(
            'order_states',
            null,
            200,
            'order_states.json'
        );

        $this->assertInstanceOf(PrestashopOrderStates::class, $result);
        $this->assertCount(2, $result->orderStates);
        $this->assertInstanceOf(PrestashopOrderState::class, $result->orderStates[0]);
    }
}
