<?php

declare(strict_types=1);

namespace Magic\src;

final class UserLunch extends Model
{
    private $lunch = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
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

    public function eatMeal(): void
    {
        $food = $this->lunch->filter(function($food) {
            return !$food->beverage;
        });
        $beverage = $this->lunch->filter(function($food) {
            return $food->beverage;
        });

        echo "the lunch have {$food->count()} foods\n";
        echo "the lunch have {$beverage->count()} beverage\n";

       foreach ($food as $item) {
           echo "{$this->name} is eating a {$item->name}\n";
       }

       foreach ($beverage as $item) {
           echo "{$this->name} is drinking {$item->name}\n";
       }
    }
}