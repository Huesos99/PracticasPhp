<?php

declare(strict_types=1);

namespace Styde\Armors;

use Styde\Weapons\Attack;

interface Armor
{
    public function absorbDamage(Attack $attack): float;
}