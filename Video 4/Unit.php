<?php

declare(strict_types=1);

abstract class Unit
{
    protected $health = 40;
    protected $damage = 40;

    public function getHealth(): int
    {
        return $this->health;
    }

    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function attack(Unit $opponent): void
    {
        $opponent->setHealth($opponent->getHealth() - $this->damage);
    }
}
