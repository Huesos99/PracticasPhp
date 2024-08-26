<?php

declare(strict_types=1);

namespace Styde\Weapons\Bows;

use Styde\Units\Unit;

final class CrossBow extends Bow
{
    protected $damage = 70;

    public function getDescription(Unit $attacker, Unit $opponent): string
    {
        return "{$attacker->getName()} shoots an arrow at {$opponent->getName()}";
    }
}