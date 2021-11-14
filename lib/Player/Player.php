<?php 

namespace BrawlStars\Player;

use BrawlStars\Brawler\BrawlerList;
use BrawlStars\Brawler\PlayerBrawler\PlayerBrawlerList;
use BrawlStars\BrawlStarsObject;

/**
 * @method string tag()
 * @method string name()
 * @method string nameColor()
 * @method array icon()
 * @method int trophies()
 * @method int highestTrophies()
 * @method int highestPowerPlayPoints()
 * @method int expLevel()
 * @method bool isQualifiedFromChampionshipChallenge()
 * @method int threeVthreeVictories()
 * @method int soloVictories()
 * @method int duoVictories()
 * @method int bestRoboRumbleTime()
 * @method int bestTimeAsBigBrawler()
 * @method PlayerClub club()
 * @method BrawlerList brawlers()
 * @method BrawlerList brawlers()
 */
class Player extends BrawlStarsObject
{
    protected $objectProperties = [
        'club' => PlayerClub::class,
        'brawlers' => PlayerBrawlerList::class,
    ];

    public function threeVthreeVictories(): int
    {
        return $this->data['3vs3Victories'] ?? null;
    }
}