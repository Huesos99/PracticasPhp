<?php

declare(strict_types=1);

namespace Styde;

final class Translator
{
    protected static $messages = [
        'BasicBowAttack' => ':unit shoots an arrow at :opponent',
        'CrossBowAttack' => ':unit shoots an arrow at :opponent',
        'MagicBowAttack' => ':unit shoots an magical arrow at :opponent',
        'BasicSwordAttack' => ':unit attacks with the sword to :opponent',
        'MagicSwordAttack' => ':unit attacks with the magic sword to :opponent',
    ];

    public static function get($key, array $params = array()): string
    {
        if (! static::has($key)) {
            return "[$key]";
        }

        return static::replaceParams(static::$messages[$key], $params);
    }

    public static function has($key): bool
    {
        return isset(static::$messages[$key]);
    }

    public static function replaceParams($message, array $params): string
    {
        foreach ($params as $key => $value) {
            $message = str_replace(":$key", $value, $message);
        }
        return $message;
    }

}