<?php

declare(strict_types=1);

namespace Styde\Armors;

use Styde\Weapons\Attack;

final class BronzeArmor implements Armor
{
    public function absorbDamage(Attack $attack): float
    {
        return $attack->getDamage() / 2;

    }
}