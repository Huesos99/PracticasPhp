<?php

declare(strict_types=1);

namespace Styde\Weapons;

use Styde\Units\Unit;

abstract class Weapon
{
    protected $damage = 0;


    public function getDamage(): int
    {
        return $this->damage;
    }

    abstract public function getDescription(Unit $attacker, Unit $opponent): string;
}