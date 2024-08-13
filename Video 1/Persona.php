<?php

declare(strict_types=1);

final class Persona {
    public $firstName; // Propiedad
    public $lastName; // Propiedad

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName =  $lastName;
    }

    public function fullName(): string // Metodo
    {
        return $this->firstName . " " . $this->lastName;
    }
}

$persona1 = new Persona('José', 'Rodríguez'); // Al hacer un "new Persona" se crea una instancia de la clase

$persona2 = new Persona('Juan', 'Mata');

echo "{$persona1->fullName()} es amigo de {$persona2->fullname()}";

