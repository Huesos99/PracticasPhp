<?php

declare(strict_types=1);

require_once 'Procesador.php';
final class Ryzen extends Procesador
{
    private $name;
    private $consumption;
    private $price;
    private $integratedGraphics;


    public function __construct(
        $generation,
        $model,
        $velocity,
        $cores,
        $threads,
        $name,
        $consumption,
        $price,
        $integratedGraphics
    ){
        $this->name = $name;
        $this->consumption = $consumption;
        $this->price = $price;
        $this->integratedGraphics = $integratedGraphics;

        parent::__construct(
            $generation,
            $model,
            $velocity,
            $cores,
            $threads
        );
    }

    public function consumption(): string
    {
        return $this->consumption;
    }

    public function price(): float
    {
        return $this->price;
    }

    public function integratedGraphics(): string
    {
        return $this->integratedGraphics;
    }
    public function fullName(): string
    {
        return $this->name. " " .$this->generation(). " " . $this->model();
    }
}

$procesador = new Ryzen(
    '3',
    '3200g',
    3.6,
    2,
    4,
    'Ryzen',
    '35 W',
    101.00,
    'Vega 8'
);

echo "The {$procesador->fullName()} processor has {$procesador->arquitecture()}.
     It has a speed of {$procesador->velocity()} Mghz, consume {$procesador->consumption()} 
     of energy and has an integrated graphics {$procesador->integratedGraphics()}, 
     its price is around {$procesador->price()} dollars
";