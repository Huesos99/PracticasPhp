<?php

declare(strict_types=1);

namespace Styde\Armors;

use Styde\Weapons\Attack;

final class LightArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack): float
    {
        return $this->dodge($attack);
    }

    public function absorbMagicalDamage(Attack $attack): float
    {
        return $this->dodge($attack);
    }

    public function dodge($attack)
    {
        if (rand(0, 1)) {
            echo "dodges the attack\n";
            return $attack->getDamage() * 0;
        } else {
            return $attack->getDamage();
        }
    }

}