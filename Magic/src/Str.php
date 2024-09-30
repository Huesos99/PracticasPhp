<?php

declare(strict_types=1);

namespace Magic\src;

final class Str
{
    public static function studly($value): string
    {
        $result = ucwords(str_replace(['-', '_'], ' ', $value));
        return str_replace(' ', '', $result);
    }
}