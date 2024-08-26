<?php

declare(strict_types=1);

namespace Styde\Units;

use Styde\Weapons\Bows\Bow;

class Archer extends Unit
{
    protected $health = 100;

    public function __construct($name, Bow $bow)
    {
        parent::__construct($name, $bow);
    }

}