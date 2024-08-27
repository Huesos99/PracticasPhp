<?php

declare(strict_types=1);

final class Persona {
    public $firstName; // Propiedad
    public $lastName;
    public $location;

    public function __construct($firstName, $lastName, $location)
    {
        $this->firstName = $firstName;
        $this->lastName =  $lastName;
        $this->location =  $location;
    }
    public function firstName(): string
    {
        return $this->firstName;
    }
    public function location(): string
    {
        return $this->location;
    }
    public function fullName(): string // Metodo
    {
        return $this->firstName . " " . $this->lastName;
    }
}

$person1 = new Persona('José', 'Rodríguez', 'San José');

$person2 = new Persona('Juan', 'Mata','Tunapuy');

echo "{$person1->fullName()} is friend of {$person2->fullname()}
       but {$person1->firstName()} live in {$person1->location()}
        and {$person2->firstName()} live in {$person2->location()}";

