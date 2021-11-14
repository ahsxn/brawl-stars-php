<?php 

namespace BrawlStars\Brawler\PlayerBrawler;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class PlayerBrawlerList extends BrawlStarsObject
{
    use ListQueryTrait;
    
    protected $objectProperties = [
        'all' => PlayerBrawler::class
    ];
}