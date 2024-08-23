<?php

declare(strict_types=1);

namespace Video45;

interface Armor
{
    public function absorbDamage($damage): float;
}