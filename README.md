# BrawlStars API

A PHP library to conveniently access and query the BrawlStars API.
It includes a pre-defined set of classes that initialise themselves dynamically from API responses.

This package uses the official BrawlStars API. For more information, please visit 
[https://developer.brawlstars.com/](https://developer.brawlstars.com/)

To read the brawlstars-php documentation please vist 
[https://ahsan112.gitbook.io/brawlstars-php/](https://ahsan112.gitbook.io/brawlstars-php/)

## Requirements
To use this package, you need to obtain an API key at [https://developer.brawlstars.com/](https://developer.brawlstars.com/)

## Installation
### Using Composer
```
composer require ahsan112/brawlstars-php
```

## Usage
When instantiating the BrawlStarsClient, you have to provide your API key:

```php
$client = new BrawlStarsClient('key');
```

## Players
Refers to `/players` endpoint from the official docs.

### Retrieve a player
```php
$player = $client->getPlayer('tag');
```

A Player object is returned
```php
$player->soloVictories()
$player->highestTrophies()
$player->brawlers();
$player->brawlers()->brawler('leon');
$player->brawlers()->brawler('leon')->power();
```

For more methods read the brawlstars-php [documentation](https://ahsan112.gitbook.io/brawlstars-php/).


### Retrieve a player's battle log

```php
$battleLog = client->getPlayerBattleLog('tag');

$battleLog->all() // retrives all battles as BattleLogList Object
$battleLog->latest() // retrives the most recent battle by the player
$battleLog->latest()->result();
$battleLog->latest()->teams();
```

For more methods read the brawlstars-php [documentation](https://ahsan112.gitbook.io/brawlstars-php/).


## Clubs
Refers to `/clubs/{clubTag}` endpoint from the official docs.

```php
$club = $client->getClub('club tag'); // returns Club object

$club->name(); 
$club->description(); 
$club->members(); // ClubMembersList Object 
```

For more methods read the brawlstars-php [documentation](https://ahsan112.gitbook.io/brawlstars-php/).

### Getting club president, vice-presidents, seniors
```php
$president = $club->president(); 
$president->name();
$president->trophies(); 

$vicePresidents = $club->vicePresidents(); 
$seniors = $club->seniors(); 

```


## Rankings

### Season ranking
Refers to `/rankings{countryCode}/seasons/{seasonId}` endpoint from the official docs.

```php
$seasonRanking = $client->getSeasonRanking(); // default is ('global', 'latest')
$seasonRanking = $client->getSeasonRanking('gb', '56');

$seasonRanking->topTen();
$seasonRanking->first()->name();
$seasonRanking->first()->trophies();
```

### Clubs Ranking
Refers to `/rankings{countryCode}/clubs` endpoint from the official docs.

```php
$clubRanking = $client->getClubsRanking(); // default is ('global')
$clubRanking = $client->getClubsRanking('gb');

$clubRanking->topTen();
$clubRanking->first()->name();
$clubRanking->first()->trophies();
$clubRanking->first()->memberCount();
```


### Brawler Ranking
Refers to `/rankings{countryCode}/brawlers/{brawlerId}` endpoint from the official docs.

```php
$brawlerRanking = $client->getBrawlerRanking('brawler id');

$brawlerRanking->topTen();
$brawlerRanking->first()->name();
$brawlerRanking->first()->trophies();
$brawlerRanking->first()->club();
```


### Player Ranking
Refers to `/rankings/{countryCode}/players` endpoint from the official docs.

```php
$playerRanking = $client->getPlayerRanking('tag');

$playerRanking->topTen();
$playerRanking->first()->name();
$playerRanking->first()->trophies();
$playerRanking->first()->club();
```

For more methods read the brawlstars-php [documentation](https://ahsan112.gitbook.io/brawlstars-php/).


## Events
Refers to `/events/rotation` endpoint from the official docs.

```php
$events = $client->getEvents();

$events->all();
$events->first()->startTime();
$events->first()->endTime();
$events->first()->map();
```
For more methods read the brawlstars-php [documentation](https://ahsan112.gitbook.io/brawlstars-php/).
