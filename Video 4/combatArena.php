<?php

declare(strict_types=1);

require_once 'Soldier.php';
require_once 'Archer.php';

final class CombatArena
{
    private $round = 1;
    public function __construct()
    {
        $this->soldier = new Soldier('Juan');
        $this->archer = new Archer('Jose');
    }

    public function startCombat(): void
    {
        while ($this->soldier->getHealth() > 0 && $this->archer->getHealth() > 0) {

            echo "Round {$this->round} fight!!!\n";
            echo "--------------------------------------------------\n";

            $this->soldier->attack($this->archer);
            echo "{$this->archer->getName()} has {$this->archer->getHealth()} health left\n";

            echo "\n";

            $this->archer->attack($this->soldier);
            echo "{$this->soldier->getName()} has {$this->soldier->getHealth()} health left\n";

            echo "\n--------------------------------------------------\n";
            $this->round++;
        }
    }
}

$arena = new CombatArena();
$arena->startCombat();


