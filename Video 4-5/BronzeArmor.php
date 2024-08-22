<?php

declare(strict_types=1);

final class BronzeArmor implements Armor
{
    public function absorbDamage($damage): float
    {
        return $damage / 2;

    }
}