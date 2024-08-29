<?php

declare(strict_types=1);

namespace Styde\Weapons;

abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;
    protected $description = ':unit attacks :opponent';

    public function createAttack(): Attack
    {
        return new Attack($this->damage, $this->magical, $this->description);
    }

}