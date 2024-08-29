<?php

declare(strict_types=1);

namespace Styde\Weapons\Bows;

use Styde\Weapons\Weapon;

final class MagicBow extends Weapon
{
    protected $damage = 50;
    protected $magical = true;
    protected $description = ':unit shoots an magical arrow at :opponent';

}