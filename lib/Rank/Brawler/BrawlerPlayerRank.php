<?php 

namespace BrawlStars\Rank\Brawler;

use BrawlStars\BrawlStarsObject;

/**
 * @method string tag()
 * @method string name()
 * @method string nameColor()
 * @method int trophies()
 * @method int rank()
 * @method string club()
 */
class BrawlerPlayerRank extends BrawlStarsObject
{
    protected $objectProperties = [];

    public function club(): string
    {
        return $this->data['club']['name'] ?? null;
    }
}