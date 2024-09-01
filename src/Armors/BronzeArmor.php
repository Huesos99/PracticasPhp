<?php

declare(strict_types=1);

namespace Styde\Armors;

use Styde\Weapons\Attack;

final class BronzeArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack): float
    {
        return $attack->getDamage() / 2;
    }

    public function absorbMagicalDamage(Attack $attack): float
    {
        return $attack->getDamage() / 2;
    }
}