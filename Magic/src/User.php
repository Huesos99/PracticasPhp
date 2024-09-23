<?php

declare(strict_types=1);

namespace Magic\src;

final class User
{
    protected $attributes = [];
    public function __construct(array $attribute = [])
    {
        $this->fill($attribute);
    }

    public function fill(array $attributes = [])
    {
        return $this->attributes = $attributes;
    }

    public function __get($name)
    {
       return $this->getAttribute($name);
    }

    public function getAttribute($name)
    {
        if (array_key_exists( $name,$this->attributes)) {
            return $this->attributes[$name];
        }
        return null;
    }

    public function __set($name, $value)
    {
        return $this->setAttribute($name, $value);
    }

    public function setAttribute($name, $value)
    {
        return $this->attributes[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->attributes[$name]);
    }

    public function __unset($name)
    {
        unset($this->attributes[$name]);
    }
}