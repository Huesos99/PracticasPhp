<?php

declare(strict_types=1);

namespace Magic\src;

final class User extends Model
{

    private $dbPassword = '123456789';
    public function __toString(): string
    {
        return $this->name;
    }

    public function __sleep(): array
    {
        return ['attributes'];
    }

    public function __wakeup(): void
    {
        $this->attributes['name'] = strtoupper($this->attributes['name']);
    }

    public function getFirstNameAttribute($value): string
    {
        return strtoupper($value);
    }
}