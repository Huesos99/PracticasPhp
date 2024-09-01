<?php

declare(strict_types=1);

namespace Styde\Weapons\Swords;

use Styde\Weapons\Weapon;

final class MagicSword extends Weapon
{
    protected $damage = 50;
    protected $magical = true;
    protected $description = ':unit casts a spell and attacks :opponent with a magic sword';

}