<?php 

namespace BrawlStars\Brawler\Gadgets;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class GadgetList extends BrawlStarsObject
{
    use ListQueryTrait;
    
    protected $objectProperties = [
        'all' => Gadget::class
    ];
}