<?php

declare(strict_types=1);

namespace Complements\Public;

require __DIR__ . '/../../vendor/autoload.php';

use Magic\src\LunchBox;
use Magic\src\UserLunch;

$gordon = new UserLunch(['name' => 'Gordon']);
$juan = new UserLunch(['name' => 'Juan']);

$lunchBox = new LunchBox(['Sandwich', 'Apple', 'Water']);

$gordon->setLunch($lunchBox);
$gordon->eatMeal();

