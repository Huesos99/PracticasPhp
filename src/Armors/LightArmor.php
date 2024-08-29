<?php

declare(strict_types=1);

namespace Styde\Armors;

use Styde\Weapons\Attack;

final class LightArmor implements Armor
{
    public function absorbDamage(Attack $attack): float
    {
        if (rand(0, 1)) {
            echo "dodges the attack\n";
            return $attack->getDamage() * 0;
        } else {
            return $attack->getDamage();
        }
    }
}