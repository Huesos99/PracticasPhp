<?php

declare(strict_types=1);

namespace Styde\Weapons;

final class MissingWeapon extends Weapon
{
    protected $damage = 2;
    protected $magical = false;
    protected $description = ':unit attacks :opponent';
}