<?php

declare(strict_types=1);

namespace Styde;

final class Log
{
    protected static $blog;

    public static function setBlog(Logger $blog): void
    {
        static::$blog = $blog;
    }
    public static function info($message): void
    {
        static::$blog->info($message);
    }
}