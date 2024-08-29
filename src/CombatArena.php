<?php

declare(strict_types=1);

namespace Styde;

use Styde\Armors\BronzeArmor;
use Styde\Armors\LightArmor;
use Styde\Units\Archer;
use Styde\Units\Soldier;
use Styde\Weapons\Bows\BasicBow;
use Styde\Weapons\Swords\BasicSword;

require '../vendor/autoload.php';

final class CombatArena
{
    private $round = 1;
    private $basicSword;
    private $basicBow;
    private $soldier;
    private $archer;

    public function __construct()
    {
        $this->basicSword = new BasicSword();
        $this->basicBow = new BasicBow();
        $this->soldier = new Soldier('Juan',$this->basicSword );
        $this->archer = new Archer('Jose',$this->basicBow);
    }

    public function startCombat(): void
    {
        $archerArmor = new LightArmor();
        $soldierArmor = new BronzeArmor();
        $this->soldier->setArmor($soldierArmor);
        $this->archer->setArmor($archerArmor);

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


