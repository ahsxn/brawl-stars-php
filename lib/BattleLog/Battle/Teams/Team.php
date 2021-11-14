<?php 

namespace BrawlStars\BattleLog\Battle\Teams;

use BrawlStars\BrawlStarsObject;


class Team extends BrawlStarsObject
{
    protected $objectProperties = [
        'all' => TeamPlayer::class
    ];
}