<?php

declare(strict_types=1);

require_once 'Unit.php';

final class Soldier extends Unit
{
    protected $health = 120;
    protected $damage = 35;

    public function attack(Unit $opponent): void
    {
        if ($this->health <= 0) {
            return;
        }

        echo "{$this->name} attack {$opponent->getName()} \n";
        $opponent->takeDamage($this->damage);

    }

    public function takeDamage($damage): void
    {
        parent::takeDamage($damage / 2);
    }

}
