<?php

declare(strict_types=1);

namespace Video45;

use Video45\Armor;

final class SilverArmor implements Armor
{
    public function absorbDamage($damage): float
    {
        return $damage / 3;

    }
}