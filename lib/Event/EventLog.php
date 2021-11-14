<?php 

namespace BrawlStars\Event;

use BrawlStars\BrawlStarsObject;

/**
 * @method string startTime()
 * @method string endTime()
 * @method Event event()
 */
class EventLog extends BrawlStarsObject
{
    protected $objectProperties = [
        'event' => Event::class
    ];
}