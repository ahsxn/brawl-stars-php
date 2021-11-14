<?php 

namespace BrawlStars\BattleLog\Battle;

use BrawlStars\BattleLog\Battle\StarPlayer\StarPlayer;
use BrawlStars\BattleLog\Battle\Teams\TeamList;
use BrawlStars\BrawlStarsObject;

/**
 * @method string mode()
 * @method string type()
 * @method string result()
 * @method int duration()
 * @method int trophychange()
 * @method StarPlayer starPlayer()
 * @method TeamList teams()
 * 
 */
class Battle extends BrawlStarsObject
{
    protected $objectProperties = [
        'starPlayer' => StarPlayer::class,
        'teams' => TeamList::class
    ];
}