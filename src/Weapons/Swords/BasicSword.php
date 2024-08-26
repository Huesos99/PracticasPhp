<?php

declare(strict_types=1);

namespace Styde\Weapons\Swords;

use Styde\Units\Unit;

final class BasicSword extends Sword
{
    protected $damage = 30;

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function getDescription(Unit $attacker, Unit $opponent): string
    {
        return "{$attacker->getName()} attacks {$opponent->getName()} with a sword";
    }
}