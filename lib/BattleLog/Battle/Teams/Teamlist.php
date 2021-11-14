<?php 

namespace BrawlStars\BattleLog\Battle\Teams;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class TeamList extends BrawlStarsObject
{
    use ListQueryTrait;
    
    protected $objectProperties = [
        'all' => Team::class
    ];
}