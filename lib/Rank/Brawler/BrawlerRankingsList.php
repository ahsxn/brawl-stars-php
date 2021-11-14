<?php 

namespace BrawlStars\Rank\Brawler;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class BrawlerRankingsList extends BrawlStarsObject
{
    use ListQueryTrait;
    
    protected $objectProperties = [
        'all' => BrawlerPlayerRank::class
    ];
}