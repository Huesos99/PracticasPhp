<?php

declare(strict_types=1);

namespace Magic\src;

final class User extends Model
{
    public function getFirstNameAttribute($value): string
    {
        return strtoupper($value);
    }
}