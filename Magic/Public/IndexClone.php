<?php

declare(strict_types=1);

namespace Magic\Public;

require __DIR__ . '/../../vendor/autoload.php';

use Magic\src\LunchBox;
use Magic\src\UserLunch;

$gordon = new UserLunch(['name' => 'Gordon']);
$juan = new UserLunch(['name' => 'Juan']);

$lunchBox = new LunchBox(['Sandwich']);

$lunchBox2 = clone($lunchBox);

$gordon->setLunch($lunchBox);
$juan->setLunch($lunchBox2);

$gordon->eat();
$juan->eat();

var_dump($lunchBox,$lunchBox2);

