<?php

declare(strict_types=1);

namespace Styde;

final class HtmlLogger implements Logger
{
    public static function info($message): void
    {
        echo "$message";
    }
}