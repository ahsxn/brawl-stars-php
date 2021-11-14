<?php 

namespace BrawlStars\Club;

use BrawlStars\BrawlStarsObject;
use BrawlStars\Traits\ListQueryTrait;

class ClubMembersList extends BrawlStarsObject
{
    use ListQueryTrait;

    protected $objectProperties = [
        'all' => ClubMember::class
    ];

}