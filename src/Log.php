<?php

declare(strict_types=1);

namespace Styde;

final class Log
{
    protected static $blog;

    public static function setBlog($blog)
    {
        static::$blog = $blog;
    }
    public static function info($message)
    {
        static::$blog->info($message);
    }
}