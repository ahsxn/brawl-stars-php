<?php 

namespace BrawlStars\Brawler\StarPowers;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class StarPowerList extends BrawlStarsObject
{
    use ListQueryTrait;
    
    protected $objectProperties = [
        'all' => StarPower::class
    ];
}