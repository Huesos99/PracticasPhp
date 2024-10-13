<?php

declare(strict_types=1);

namespace Complements\Src;
use Magic\src\Str;

abstract class Model
{
    protected $attributes = [];

    public function __construct(array $attribute = [])
    {
        $this->fill($attribute);
    }

    public function fill(array $attributes = []): array
    {
        return $this->attributes = $attributes;
    }

    public function setAttribute($name, $value): self
    {
        $customSetter = 'set'.Str::studly($name).'Attribute';

        if (method_exists($this, $customSetter)) {
            return $this->$customSetter($value);
        }

        $this->attributes[$name] = $value;

        return $this;
    }

    public function hasGetMutator($name): bool
    {
        return method_exists($this, 'get'.Str::studly($name).'Attribute');
    }

    public function getAttribute($name): int|string
    {
        $value = $this->getAttributeValue($name);

        if ($this->hasGetMutator($name)) {
            return $this->mutateAttibute($name, $value);
        }

        return $value;
    }

    public function getAttributeValue($name): int|string
    {
        if (array_key_exists($name, $this->attributes)){
            return $this->attributes[$name];
        }

        return "";
    }

    private function mutateAttibute($name, $value): int|string
    {
        return $this->{'get' . Str::studly($name) . 'Attribute'}($value);
    }

    public function __get($name): int|string
    {
        return $this->getAttribute($name);
    }

    public function __set($name, $value): void
    {
        $this->setAttribute($name, $value);
    }

    public function __isset($name): bool
    {
        return isset($this->attributes[$name]);
    }

    public function __unset($name): void
    {
        unset($this->attributes[$name]);
    }
}