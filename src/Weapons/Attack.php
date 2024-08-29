<?php

declare(strict_types=1);

namespace Styde\Weapons;

use Styde\Units\Unit;

final class Attack
{
    private $damage;
    private $magical;
    private $description;

    public function __construct(int $damage, bool $magical, string $description)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->description = $description;
    }

    public function getDescription(Unit $attacker, Unit $opponent): string
    {
        return str_replace(
            [':unit', ':opponent'],
            [$attacker->getName(), $opponent->getName()],
            $this->description
        );
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function isMagical(): bool
    {
        return $this->magical;
    }

    public function isPhysical(): bool
    {
        return !$this->magical;
    }
}