<?php

declare(strict_types=1);

require_once 'Unit.php';

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
