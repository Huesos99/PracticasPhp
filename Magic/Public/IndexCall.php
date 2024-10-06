<?php

declare(strict_types=1);

namespace Magic\Public;

use Magic\src\Html;

require __DIR__ . '/../../vendor/autoload.php';

$html = Html::textarea('Styde')
    ->name('content')
    ->id('contenido');

var_dump($html('name'), $html('long','100'));

//php -S localhost:8000 -t Magic/Public
//http://localhost:8000/IndexCall.php