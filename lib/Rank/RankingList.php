<?php 

namespace BrawlStars\Rank;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class RankingList extends BrawlStarsObject
{
    use ListQueryTrait;
    
    protected $objectProperties = [
        'all' => PlayerRank::class
    ];
}