<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tests\Api;

use PHPUnit\Framework\MockObject\Rule\InvokedAtLeastOnce;
use Scraper\Scraper\Client;
use Scraper\ScraperPrestashop\Entity\PrestashopPut;
use Scraper\ScraperPrestashop\Entity\PrestashopStockAvailable;
use Scraper\ScraperPrestashop\Entity\PrestashopStockAvailables;
use Scraper\ScraperPrestashop\Request\PrestashopPutRequest;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @internal
 */
class PrestashopStockAvailableApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopStockAvailable $result */
        $result = $this->executeGetApi(
            'stock_availables',
            1,
            200,
            'stock_available.json'
        );

        $this->assertInstanceOf(PrestashopStockAvailable::class, $result);

        $this->assertEquals(1, $result->id);
        $this->assertEquals(42, $result->quantity);
    }

    public function testList(): void
    {
        /** @var PrestashopStockAvailables $result */
        $result = $this->executeGetApi(
            'stock_availables',
            null,
            200,
            'stock_availables.json'
        );

        $this->assertInstanceOf(PrestashopStockAvailables::class, $result);
        $this->assertCount(2, $result->stockAvailables);
        $this->assertInstanceOf(PrestashopStockAvailable::class, $result->stockAvailables[0]);
    }

    public function testPut(): void
    {
        $responseInterface = $this->createMock(ResponseInterface::class);
        $responseInterface
            ->method('getStatusCode')->willReturn(200)
        ;
        $responseInterface
            ->method('getContent')->willReturn($this->loadFixture('stock_available.json'))
        ;

        $httpClientInterface = $this->createMock(HttpClientInterface::class);
        $httpClientInterface
            ->expects(new InvokedAtLeastOnce())
            ->method('request')
            ->with(
                $this->stringContains('PUT'),
                $this->stringContains('https://website/api/stock_availables/'),
                $this->callback(function ($options) {
                    $this->assertXmlStringEqualsXmlFile($this->fixturePath('stock_available.xml'), $options['body']);
                    return true;
                })
            )
            ->willReturn($responseInterface)
        ;

        $client = new Client($httpClientInterface);

        $request = new PrestashopPutRequest(
            'website',
            'key',
            'stock_availables'
        );
        $stockAvailable = new PrestashopStockAvailable();
        $stockAvailable
            ->setId(6)
            ->setIdProduct(6)
            ->setIdProductAttribute(0)
            ->setQuantity(42)
            ->setDependsOnStock(0)
            ->setOutOfStock(2)
            ->setIdShop(1)
            ->setIdShopGroup(0)
        ;
        $prestashopPut = new PrestashopPut();
        $prestashopPut->setStockAvailable($stockAvailable);
        $request
            ->setPrestashopPut($prestashopPut)
        ;
        $client->send($request);
    }
}
