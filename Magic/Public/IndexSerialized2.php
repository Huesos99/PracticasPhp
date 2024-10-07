<?php

declare(strict_types=1);

namespace Magic\Public;

require __DIR__ . '/../../vendor/autoload.php';

use Magic\src\User;

$user = new User([
    'name' => 'Jose',
    'email' => 'coco@gmail.com'
    ]);

echo $result = serialize($user);

file_put_contents(__DIR__ . '/../../storage/user.txt', $result);
