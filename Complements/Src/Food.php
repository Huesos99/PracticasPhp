<?php

declare(strict_types=1);

namespace Complements\Src;

use Magic\src\Model;

final class Food extends Model
{
    public function getBeverageAttribute(): bool
    {
        return $this->attributes['beverage'] ?? false;
    }
}