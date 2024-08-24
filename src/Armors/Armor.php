<?php

declare(strict_types=1);

namespace Styde\Armors;

interface Armor
{
    public function absorbDamage($damage): float;
}