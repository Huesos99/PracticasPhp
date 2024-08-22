<?php

declare(strict_types=1);

require_once 'Soldier.php';
require_once 'Archer.php';
require_once 'SilverArmor.php';
require_once 'LightArmor.php';

final class CombatArena
{
    private $round = 1;
    private $soldierArmor;
    private $archerArmor;

    public function __construct()
    {
        $this->archerArmor = new LightArmor();
        $this->soldierArmor = new SilverArmor();
        $this->soldier = new Soldier('Juan',$this->soldierArmor);
        $this->archer = new Archer('Jose',$this->archerArmor);
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


