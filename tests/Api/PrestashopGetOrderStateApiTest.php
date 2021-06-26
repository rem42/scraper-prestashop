<?php

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

        $this->assertEquals(1, $result->getId());

        $this->assertCount(1, $result->getName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());

        $this->assertCount(1, $result->getTemplate());
        $this->assertInstanceOf(PrestashopItem::class, $result->getTemplate()->first());
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

        $this->assertEquals(1, $result->getId());

        $this->assertCount(2, $result->getName());
        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());

        $this->assertCount(2, $result->getTemplate());
        $this->assertInstanceOf(PrestashopItem::class, $result->getTemplate()->first());
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
        $this->assertCount(2, $result->getOrderStates());
        $this->assertInstanceOf(PrestashopOrderState::class, $result->getOrderStates()->first());
    }
}
