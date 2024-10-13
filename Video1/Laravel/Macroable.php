<?php

declare(strict_types=1);

namespace Laravel;

trait Macroable
{
    protected static $macros = [];

    public static function hasMacro($method): bool
    {
        return isset(static::$macros[$method]);
    }
    public static function macro($method, \Closure $macro): void
    {
        static::$macros[$method] = $macro;
    }

    public function __call($method, $parameters)
    {
        if (static::hasMacro($method)) {
            return call_user_func_array(static::$macros[$method], $parameters);
        }

        throw new \BadMethodCallException("Method {$method} does not exist");
    }
}