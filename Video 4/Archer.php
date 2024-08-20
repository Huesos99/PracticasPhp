<?php

declare(strict_types=1);

require_once 'Unit.php';

class Archer extends Unit
{
    protected $health = 100;
    protected $damage = 70;

    public function attack(Unit $opponent): void
    {
        if ($this->health <= 0) {
            return;
        }
        echo "{$this->name} shoots an arrow at {$opponent->getName()}\n";
        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage): void
    {
        if (rand(0, 1)) {
            parent::takeDamage($damage * 0);
            echo "{$this->name} dodges the attack\n";
        }else{
            parent::takeDamage($damage);
        }

    }
}
