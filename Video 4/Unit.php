<?php

declare(strict_types=1);

abstract class Unit
{
    protected $health = 50;
    protected $damage = 40;
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHealth(): float
    {
        return (float) number_format($this->health, 2);
    }
    public abstract function attack(Unit $opponent): void;

    public function die()
    {
        if ($this->health <= 0) {
            echo "{$this->name} has died\n";
        }
    }

    public function takeDamage($damage)
    {
        $this->health -= $damage;

        if ($this->health <= 0) {
            $this->die();
        }
    }

}
