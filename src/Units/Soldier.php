<?php

declare(strict_types=1);

namespace Styde\Units;

use Styde\Weapons\Swords\Sword;

final class Soldier extends Unit
{
    protected $health = 120;

    public function __construct($name, Sword $sword)
    {
        parent::__construct($name, $sword);
    }

}
