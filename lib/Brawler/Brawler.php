<?php 

namespace BrawlStars\Brawler;

use BrawlStars\Brawler\Gadgets\GadgetList;
use BrawlStars\Brawler\StarPowers\StarPowerList;
use BrawlStars\BrawlStarsObject;

/**
 * @method int id()
 * @method string name()
 * @method StarPowerList starPowers()
 * @method GadgetList gadgets()
 */
class Brawler extends BrawlStarsObject
{
    protected $objectProperties = [
        'gadgets' => GadgetList::class,
        'starPowers' => StarPowerList::class
    ];
}