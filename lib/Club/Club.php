<?php 

namespace BrawlStars\Club;

use BrawlStars\BrawlStarsObject;

/**
 * @method string tag()
 * @method string name()
 * @method string description()
 * @method string type()
 * @method int badgeId()
 * @method int requiredTrophies()
 * @method ClubMembersList members()
 */
class Club extends BrawlStarsObject
{
    protected $objectProperties = [
        'members' => ClubMembersList::class
    ];

    public function president(): ClubMember 
    {
        return $this->queryRole('president')[0] ?? null;
    }

    /**
     * @return ClubMember[]
     */
    public function vicePresidents(): array 
    {
        return $this->queryRole('vicePresident');
    }

    /**
     * @return ClubMember[]
     */
    public function seniors(): array
    {
        return $this->queryRole('seniors');
    }

    private function queryRole(string $role): array
    {
        $members = $this->data['members'];
        $roles = [];

        foreach ($members->all() as $member) {
            if ($member->role() == $role) {
                $roles[] = $member;
            }
        }

        return $roles;
    }
}