<?php

declare(strict_types=1);

namespace Styde\Weapons\Swords;

use Styde\Weapons\Weapon;

final class BasicSword extends Weapon
{
    protected $damage = 30;
    protected $description = ':unit attacks :opponent with a sword';

}