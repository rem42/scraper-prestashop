<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Api;

use Scraper\ScraperPrestashop\Exception\PrestashopUnexpectedException;
use Scraper\ScraperPrestashop\Request\PrestashopRequest;
use Scraper\ScraperPrestashop\Tools\ResourceMapping;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

class PrestashopPutApi extends PrestashopApi
{
    /**
     * @return object|array<object>
     */
    public function execute(): object|array
    {
        $content = $this->response->getContent();

        if (!$this->request instanceof PrestashopRequest) {
            throw new PrestashopUnexpectedException('cannot handle ' . \get_class($this->request) . ' in get env');
        }

        $className = ResourceMapping::find($this->request);
        /** @var array<string, mixed> $data */
        $data = json_decode($content, true, 512, \JSON_THROW_ON_ERROR);
        $content = json_encode($data[ResourceMapping::singularize($this->request)], \JSON_THROW_ON_ERROR);

        /* @phpstan-ignore-next-line */
        return $this->serializer
            ->deserialize(
                $content,
                $className,
                'json',
                [
                    AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true,
                ]
            )
        ;
    }
}
