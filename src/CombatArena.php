<?php

declare(strict_types=1);

namespace Styde;

use Styde\Armors\Armor;
use Styde\Armors\BronzeArmor;
use Styde\Armors\LightArmor;
use Styde\Armors\SilverArmor;
use Styde\Units\Unit;
use Styde\Weapons\Bows\BasicBow;
use Styde\Weapons\Bows\CrossBow;
use Styde\Weapons\Bows\MagicBow;
use Styde\Weapons\Swords\BasicSword;
use Styde\Weapons\Swords\MagicSword;
use Styde\Weapons\Weapon;

require '../vendor/autoload.php';

final class CombatArena
{
    private $round = 1;
    private $soldier;
    private $archer;

    public function __construct()
    {
        $this->soldier = new Unit('Juan');
        $this->archer = new Unit('Jose');

        $this->equipRandomSet();
    }
    private function equipRandomSet(): void
    {
        $soldierArmor = $this->getRandomArmor();
        $soldierWeapon = $this->getRandomWeapon();
        $this->soldier->setArmor($soldierArmor);
        $this->soldier->setWeapon($soldierWeapon);

        echo "{$this->soldier->getName()} has been equipped with "
            . $soldierArmor->getName() . " and "
            . $soldierWeapon->getName() . "\n";

        $archerArmor = $this->getRandomArmor();
        $archerWeapon = $this->getRandomWeapon();
        $this->archer->setArmor($archerArmor);
        $this->archer->setWeapon($archerWeapon);

        echo "{$this->archer->getName()} has been equipped with "
            . $archerArmor->getName() . " and "
            . $archerWeapon->getName() . "\n";
    }

    private function getRandomArmor(): Armor
    {
        $armors = [
            new BronzeArmor(),
            new LightArmor(),
            new SilverArmor()
        ];
        return $armors[array_rand($armors)];
    }

    private function getRandomWeapon(): Weapon
    {
        $weapons = [
            new BasicSword(),
            new MagicBow(),
            new CrossBow(),
            new BasicBow(),
            new MagicSword()
        ];
        return $weapons[array_rand($weapons)];
    }

    public function startCombat(): void
    {
        echo "\n The combat between {$this->soldier->getName()} and {$this->archer->getName()} has begun\n\n";

        while ($this->soldier->isAlive() && $this->archer->isAlive()) {

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


