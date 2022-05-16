<?php

namespace Scraper\ScraperPrestashop\Api;

use Scraper\ScraperPrestashop\Exception\PrestashopUnexpectedException;
use Scraper\ScraperPrestashop\Factory\SerializerFactory;
use Scraper\ScraperPrestashop\Request\PrestashopRequest;
use Scraper\ScraperPrestashop\Tools\ResourceMapping;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

class PrestashopGetApi extends PrestashopApi
{
    /**
     * @return object|object[]|string
     */
    public function execute()
    {
        $content = $this->response->getContent();

        if (!$this->request instanceof PrestashopRequest) {
            throw new PrestashopUnexpectedException('cannot handle ' . \get_class($this->request) . ' in get env');
        }

        if (ResourceMapping::isFile($this->request)) {
            return $content;
        }

        $className = ResourceMapping::find($this->request);

        if ($this->request->getId()) {
            /** @var array<string, mixed> $data */
            $data    = json_decode($content, true, 512, \JSON_THROW_ON_ERROR);
            $content = json_encode($data[ResourceMapping::singularize($this->request)], \JSON_THROW_ON_ERROR);
        }

        return SerializerFactory::create()
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
