<?php

declare(strict_types=1);

namespace Magic\src;

final class LunchBox
{
    protected $food = [];
    protected $original = true;

    public function __construct(array $food = [])
    {
        $this->food = $food;
    }

    public function __clone()
    {
        $this->original = false;
    }

    public function shift(): string
    {
        return array_shift($this->food);
    }

    public function isEmpty(): bool
    {
        return empty($this->food);
    }

}