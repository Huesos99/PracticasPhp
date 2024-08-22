<?php

declare(strict_types=1);

interface Armor
{
    public function absorbDamage($damage): float;
}