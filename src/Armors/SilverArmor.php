<?php

declare(strict_types=1);

namespace Styde\Armors;

use Styde\Weapons\Attack;

final class SilverArmor implements Armor
{
    public function absorbDamage(Attack $attack): float
    {
        if($attack->isPhysical()){
            return $attack->getDamage() / 3;
        }else{
            return $attack->getDamage();
        }
    }
}