<?php

declare(strict_types=1);

namespace Styde\Weapons\Bows;

use Styde\Weapons\Weapon;

final class BasicBow extends Weapon
{
    protected $damage = 30;
    protected $description = ':unit shoots an arrow at :opponent';

}