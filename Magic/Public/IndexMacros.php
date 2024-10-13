<?php

declare(strict_types=1);

namespace Magic\Public;

use Laravel\HtmlBuilderBase;

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../Video1/Laravel/Macroable.php';
require __DIR__ . '/../../Video1/Laravel/HtmlBuilderBase.php';

HtmlBuilderBase::macro('success', function ($message) {
    return "<p style=\"
            background-color: #dff0d8;
            border-color: #d0e9c6;
            color: #3c763d;
            padding: 10px\"
            >{$message}</p>";
});

$htmlBuilder = new HtmlBuilderBase();

echo $htmlBuilder->hr();
echo $htmlBuilder->success('Todo salió bien');