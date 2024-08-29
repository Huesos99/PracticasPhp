<?php

declare(strict_types=1);

namespace Styde\Weapons\Bows;

use Styde\Units\Unit;

final class BasicBow extends Bow
{
    protected $damage = 50;

    public function getDescription(Unit $attacker, Unit $opponent): string
    {
        return "{$attacker->getName()} shoots an arrow at {$opponent->getName()}";
    }
}