<?php

declare(strict_types=1);

namespace Styde\Units;

use Styde\Armors\Armor;
use Styde\Armors\MissingArmor;
use Styde\Weapons\Attack;
use Styde\Weapons\MissingWeapon;
use Styde\Weapons\Weapon;

class Unit
{
    protected $health = 100;
    protected $name;
    protected $armor;
    protected $weapon;
    protected $alive = true;

    public function __construct
    (
        $name
    ){
        $this->name = $name;
        $this->weapon = new MissingWeapon();
        $this->armor = new MissingArmor();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setArmor(Armor $armor = null): void
    {
        $this->armor = $armor;
    }

    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
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

    public function isAlive(): bool
    {
        if ($this->health <= 0) {
            echo "{$this->name} has died\n";
            exit();
        }
        return $this->alive;
    }

    public function takeDamage(Attack $attack): void
    {
        $this->health -= $this->armor->absorbDamage($attack);
        $this->isAlive();
    }
}
