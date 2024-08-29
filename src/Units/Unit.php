<?php

declare(strict_types=1);

namespace Styde\Units;

use Styde\Armors\Armor;
use Styde\Weapons\Attack;
use Styde\Weapons\Weapon;

class Unit
{
    protected $health = 100;
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
        $attack = $this->weapon->createAttack();
        echo "{$attack->getDescription($this, $opponent)}\n";

        $opponent->takeDamage($attack);
    }
    public function die()
    {
        if ($this->health <= 0) {
            echo "{$this->name} has died\n";
        }

        exit();
    }

    public function takeDamage(Attack $attack): void
    {
        $this->health -= $this->absorbDamage($attack);

        if ($this->health <= 0) {
            $this->die();
        }
    }

    public function absorbDamage(Attack $attack): float
    {
        if ($this->armor){
            return $this->armor->absorbDamage($attack);
        }
        return $attack->getDamage();
    }

}
