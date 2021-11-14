<?php 

namespace BrawlStars\Brawler\PlayerBrawler;

use BrawlStars\Brawler\Gadgets\GadgetList;
use BrawlStars\Brawler\StarPowers\StarPowerList;
use BrawlStars\BrawlStarsObject;

/**
 * @method int id()
 * @method string name()
 * @method int power()
 * @method int rank()
 * @method int trophies()
 * @method int highestTrophies()
 * @method StarPowerList starPowers()
 * @method GadgetList gadgets()
 */
class PlayerBrawler extends BrawlStarsObject
{
    protected $objectProperties = [
        'gadgets' => GadgetList::class,
        'starPowers' => StarPowerList::class
    ];
}