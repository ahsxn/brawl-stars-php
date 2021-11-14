<?php 

namespace BrawlStars\BattleLog\Battle\StarPlayer;

use BrawlStars\BattleLog\Battle\BattleBrawler;
use BrawlStars\BrawlStarsObject;

/**
 * @method string tag()
 * @method string name()
 * @method BattleBrawler brawler()
 */
class StarPlayer extends BrawlStarsObject
{
    protected $objectProperties = [
        'brawler' => BattleBrawler::class
    ];
}