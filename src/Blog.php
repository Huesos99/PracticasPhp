<?php

declare(strict_types=1);

namespace Styde;

final class Blog implements Logger
{
    public static function info($message): void
    {
        file_put_contents(
            __DIR__.'/../storage/log.txt',
            '(' . date('Y-m-d H:i:s') . ') ' . $message . PHP_EOL,
            FILE_APPEND
        );
    }
}