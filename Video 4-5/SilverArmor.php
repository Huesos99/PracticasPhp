<?php

declare(strict_types=1);

final class SilverArmor implements Armor
{
    public function absorbDamage($damage): float
    {
        return $damage / 3;

    }
}