<?php 

namespace BrawlStars\BattleLog;

use BrawlStars\BattleLog\Battle\Battle;
use BrawlStars\BrawlStarsObject;
use BrawlStars\Event\Event;

/**
 * @method string battleTime()
 * @method Event event()
 * @method Battle battle()
 */
class BattleLog extends BrawlStarsObject
{
    protected $objectProperties = [
        'battle' => Battle::class,
        'event' => Event::class
    ];
}