<?php

declare(strict_types=1);

namespace Magic\Public;

require __DIR__ . '/../../vendor/autoload.php';

use Magic\src\User;

    $user = new User();

    $user->fill([
        'first_name' => 'Duilio',
        'last_name' => 'Palacios',
    ]);

    $user->nickname = 'Silence';

    echo "The user name is: {$user->first_name} {$user->last_name}";

    if (isset($user->nickname)) {
        echo " The user has a nickname: {$user->nickname}";
    }