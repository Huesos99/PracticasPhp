<?php

declare(strict_types=1);

namespace Magic\src;

final class UserLunch extends Model
{
    private $lunch = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        //$attributes['lunch'] ?? []
        $this->lunch = new LunchBox();
    }

    public function setLunch(LunchBox $lunch): void
    {
        $this->lunch = $lunch;
    }

    public function eat(): void
    {
        if($this->lunch->isEmpty()) {
            echo "No lunch for $this->name\n";
        }

        echo "$this->name is eating a {$this->lunch->shift()}\n";
    }
}