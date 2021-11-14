<?php 

namespace BrawlStars\Brawler;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class BrawlerList extends BrawlStarsObject
{
    use ListQueryTrait;

    protected $objectProperties = [
        'all' => Brawler::class
    ];
}