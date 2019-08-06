<?php

namespace Scraper\ScraperPrestashop\Event;

use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\PreDeserializeEvent;

class NameEventSubscriber implements EventSubscriberInterface
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            [
                'event' => 'serializer.pre_deserialize',
                'method' => 'nameTransformToItem',
                'class' => 'ArrayCollection', // if no class, subscribe to every serialization
                'format' => 'json', // optional format
                'priority' => 10, // optional priority
            ],
        ];
    }

    public function nameTransformToItem(PreDeserializeEvent $event)
    {
        $type = $event->getType();

        if (isset($type['params']) && count($type['params']) > 0 && 'Scraper\ScraperPrestashop\Entity\PrestashopItem' == $type['params'][0]['name']) {
            $data = $event->getData();

            if (!is_array($data)) {
                $event->setData([
                    ['id' => 1, 'value' => $data],
                ]);
            }
        }
    }
}
