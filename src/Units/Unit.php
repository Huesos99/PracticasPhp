<?php

declare(strict_types=1);

namespace Styde\Units;

use Styde\Armors\Armor;
use Styde\Weapons\Weapon;

abstract class Unit
{
    protected $health;
    protected $name;
    protected $armor;
    protected $weapon;

    public function __construct
    (
        $name,
        Weapon $weapon
    ){
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function SetArmor(Armor $armor = null): void
    {
        $this->armor = $armor;
    }

    public function getHealth(): float
    {
        return (float) number_format($this->health, 2);
    }
    public function attack(Unit $opponent): void
    {
        echo "{$this->weapon->getDescription($this, $opponent)}\n";

        $opponent->takeDamage($this->weapon->getDamage());
    }
    public function die()
    {
        if ($this->health <= 0) {
            echo "{$this->name} has died\n";
        }

        exit();
    }

    public function takeDamage($damage): void
    {
        $this->health -= $this->absorbDamage($damage);

        if ($this->health <= 0) {
            $this->die();
        }
    }

    public function absorbDamage($damage): float
    {
        if ($this->armor){
            $damage = $this->armor->absorbDamage($damage);
        }
        return $damage;
    }

}
