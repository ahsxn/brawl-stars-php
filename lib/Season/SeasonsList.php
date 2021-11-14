<?php 

namespace BrawlStars\Season;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class SeasonsList extends BrawlStarsObject
{
    use ListQueryTrait;
    
    protected $objectProperties = [
        'all' => Season::class
    ];
}