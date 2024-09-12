<?php

declare(strict_types=1);

namespace Styde\Weapons;

abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;

    public function createAttack(): Attack
    {
        return new Attack($this->damage, $this->magical, $this->getName());
    }

    public function getName(): string
    {
        return basename(str_replace('\\', '/', static::class).'Attack');
    }
    public function getName2(): string
    {
        return basename(str_replace('\\', '/', static::class));
    }

}