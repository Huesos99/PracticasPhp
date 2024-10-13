<?php

declare(strict_types=1);

namespace Complements\Public;

use Complements\Src\User;

require __DIR__ . '/../../vendor/autoload.php';

$user = new User([
    'name' => 'John Wick',
    'birthdate' => '1964-09-02',
]);
$user->age;
echo "{$user->name} tiene {$user->age} años\n";

