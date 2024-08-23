<?php

declare(strict_types=1);

namespace Video45;

use Video45\Unit;
use Video45\Armor;

class Archer extends Unit
{
    protected $health = 100;
    protected $damage = 60;
    protected $armor;

    public function __construct($name,Armor $armor = null)
    {
        parent::__construct($name);
        $this->setArmor($armor);
    }

    public function setArmor(?Armor $armor): void
    {
        $this->armor = $armor;
    }

    public function attack(Unit $opponent): void
    {
        echo "{$this->name} shoots an arrow at {$opponent->getName()}\n";
        $opponent->takeDamage($this->damage);
    }

    public function absorbDamage($damage): float
    {
        if ($this->armor){
            $damage = $this->armor->absorbDamage($damage);
        }
        return $damage;
    }
}
