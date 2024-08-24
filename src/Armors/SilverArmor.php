<?php

declare(strict_types=1);

namespace Styde\Armors;

final class SilverArmor implements Armor
{
    public function absorbDamage($damage): float
    {
        return $damage / 3;

    }
}