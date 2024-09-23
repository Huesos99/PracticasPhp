<?php

declare(strict_types=1);

namespace Magic\src;

final class Model
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function setAttribute($name, $value)
    {
      $customSetter = 'set'.Str::studly($name).'Attribute';

        if (method_exists($this, $customSetter)) {
            return $this->$customSetter($value);
        }

        $this->attributes[$name] = $value;

        return $this;
    }

    public function getAttribute($name)
    {
        $customGetter = 'get'.Str::studly($name).'Attribute';

        $value = array_key_exists($name, $this->attributes)
            ? $this->attributes[$name]
            : null;

        if (method_exists($this, $customGetter)) {
            return $this->$customGetter($value);
        }

        return $value;
    }

    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    public function __set($name, $value)
    {
        return $this->setAttribute($name, $value);
    }

}