<?php

declare(strict_types=1);

require_once 'Unit.php';

class Archer extends Unit
{
    protected $health = 30;
    protected $damage = 30;

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
