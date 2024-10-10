<?php

declare(strict_types=1);

namespace Complements\Public;

require __DIR__ . '/../../vendor/autoload.php';

use Complements\Src\Food;
use Magic\src\LunchBox;
use Magic\src\UserLunch;

$gordon = new UserLunch(['name' => 'Gordon']);

$lunchBox = new LunchBox([
    new Food(['name' => 'Sandwich', 'beverage' => false]),
    new Food(['name' => 'Apple']),
    new Food(['name' => 'Water', 'beverage' => true]),
    new Food(['name' => 'Potato']),
    new Food(['name' => 'Juice Orange', 'beverage' => true]),
]);

$gordon->setLunch($lunchBox);
$gordon->eatMeal();

