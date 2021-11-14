<?php 

namespace BrawlStars\Event;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class EventList extends BrawlStarsObject
{
    use ListQueryTrait;
    
    protected $objectProperties = [
        'all' => EventLog::class
    ];
}