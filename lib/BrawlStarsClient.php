<?php 

namespace BrawlStars;

use BrawlStars\BattleLog\BattleLogList;
use BrawlStars\Brawler\BrawlerList;
use BrawlStars\Club\Club;
use BrawlStars\Club\ClubMembersList;
use BrawlStars\Event\EventList;
use BrawlStars\Player\Player;
use BrawlStars\Rank\Brawler\BrawlerRankingsList;
use BrawlStars\Rank\Club\ClubRankingsList;
use BrawlStars\Rank\RankingList;
use BrawlStars\Season\SeasonsList;

class BrawlStarsClient 
{
    private $apiUrl = 'https://api.brawlstars.com/v1/';
    private $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function getPlayer(string $playerTag): Player
    {
        $data = $this->request("players/%23{$playerTag}");

        return Player::make($data);
    }

    public function getPlayerBattleLog(string $playerTag): BattleLogList
    {
        $data = $this->request("players/%23{$playerTag}/battlelog");

        return BattleLogList::make($data['items']);
    }

    public function getClub(string $clubTag): Club
    {
        $data = $this->request("clubs/%23{$clubTag}");
        
        return Club::make($data);
    }

    public function getClubMembers(string $clubTag): ClubMembersList
    {
        $data = $this->request("clubs/%23{$clubTag}/members");

        return ClubMembersList::make($data['items']);
    }

    public function getSeasonRanking(string $countryCode = 'global', string $seasonId = 'latest'): RankingList
    {
        $data = $this->request("rankings/{$countryCode}/powerplay/seasons/{$seasonId}");

        return RankingList::make($data['items']);
    }

    public function getPowerPlaySeasons(string $countryCode = 'global'): SeasonsList
    {
        $data = $this->request("rankings/{$countryCode}/powerplay/seasons");
        
        return SeasonsList::make($data['items']);
    }

    public function getClubsRanking(string $countryCode = 'global'): ClubRankingsList
    {
        $data = $this->request("rankings/{$countryCode}/clubs");
        
        return ClubRankingsList::make($data['items']);
    }

    public function getBrawlerRanking(string $countryCode = 'global', string $brawlerId): BrawlerRankingsList
    {
        $data = $this->request("rankings/{$countryCode}/brawlers/{$brawlerId}");
        
        return BrawlerRankingsList::make($data['items']);
    }

    public function getPlayersRanking(string $countryCode = 'global'): RankingList
    {
        $data = $this->request("rankings/{$countryCode}/players");
        
        return RankingList::make($data['items']);
    }

    public function getEvents(): EventList
    {
        $data = $this->request('events/rotation');
        
        return EventList::make($data);
    }

    public function getBrawlers(): BrawlerList
    {
        $data = $this->request('brawlers');
        
        return BrawlerList::make($data['items']);
    }

    private function request(string $route): array
    {
        $ch = curl_init($this->apiUrl . $route);

        $headers = [];
        $headers[] = "Accept: application/json";
        $headers[] = "Authorization: Bearer " . $this->token;

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        
        curl_close($ch);

        return json_decode($response, true);
    }
}