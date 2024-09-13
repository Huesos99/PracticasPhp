<?php

declare(strict_types=1);

namespace Styde;

final class HtmlLogger
{
    public static function info($message)
    {
        echo "$message";
    }
}