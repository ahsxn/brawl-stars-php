<?php 

namespace BrawlStars\BattleLog\Battle\Teams;

use BrawlStars\BattleLog\Battle\BattleBrawler;
use BrawlStars\BrawlStarsObject;

/**
 * @method string tag()
 * @method string name()
 * @method BattleBrawler brawler()
 */
class TeamPlayer extends BrawlStarsObject
{
    protected $objectProperties = [
        'brawler' => BattleBrawler::class
    ];
}