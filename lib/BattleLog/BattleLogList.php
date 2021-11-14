<?php 

namespace BrawlStars\BattleLog;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class BattleLogList extends BrawlStarsObject
{
    use ListQueryTrait;
    
    protected $objectProperties = [
        'all' => BattleLog::class
    ];
}