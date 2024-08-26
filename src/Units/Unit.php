<?php

declare(strict_types=1);

namespace Styde\Units;

abstract class Unit
{
    protected $health;
    protected $damage;
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
        return $damage;
    }

}
