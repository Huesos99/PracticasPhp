<?php

declare(strict_types=1);

namespace Magic\src;

final class LunchBox implements \IteratorAggregate, \Countable
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

    public function filter(callable $callback): LunchBox
    {
        return new static(array_filter($this->food, $callback));
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->food);
    }

    public function count(): int
    {
        return count($this->food);
    }

}