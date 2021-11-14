<?php 

namespace BrawlStars\Traits;

use BrawlStars\BrawlStarsObject;

trait ListQueryTrait
{
    public function all(): array
    {
        return $this->data ?? null;
    }

    public function first()
    {
        return $this->data[0] ?? null;
    }
}