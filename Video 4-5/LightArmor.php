<?php

declare(strict_types=1);

final class LightArmor implements Armor
{
    public function absorbDamage($damage): float
    {
        if (rand(0, 1)) {
            echo "dodges the attack\n";
            return $damage * 0;
        } else {
            return $damage;
        }
    }
}