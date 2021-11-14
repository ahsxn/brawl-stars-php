<?php 

namespace BrawlStars\Rank\Club;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class ClubRankingsList extends BrawlStarsObject
{
    use ListQueryTrait;

    protected $objectProperties = [
        'all' => ClubRank::class
    ];
}