<?php

declare(strict_types=1);

namespace Magic\Public;

require __DIR__ . '/../../vendor/autoload.php';

$data = file_get_contents(__DIR__ . '/../../storage/user.txt');

$user = unserialize($data);

var_dump($user);
echo $user->name;
