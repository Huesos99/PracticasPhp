<?php

declare(strict_types=1);

namespace Styde\Armors;

use Styde\Weapons\Attack;

abstract class Armor
{
    public function absorbDamage(Attack $attack): float
    {
        if($attack->isMagical())
        {
            return $this->absorbMagicalDamage($attack);
        } else {
            return $this->absorbPhysicalDamage($attack);
        }
    }

    public function absorbPhysicalDamage(Attack $attack): float
    {
        return $attack->getDamage();
    }

    public function absorbMagicalDamage(Attack $attack): float
    {
        return $attack->getDamage();
    }
    public function getName(): string
    {
        return basename(str_replace('\\', '/', static::class));
    }
}