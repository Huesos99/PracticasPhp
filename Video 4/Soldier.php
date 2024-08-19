<?php

declare(strict_types=1);

require_once 'Unit.php';

class Soldier extends Unit
{
    protected $health = 50;
    protected $damage = 50;

    public function attack(Unit $opponent): void
    {
        $opponent->setHealth($opponent->getHealth() - $this->damage);
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

}
