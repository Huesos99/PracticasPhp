<?php

declare(strict_types=1);

final class EncapsulatedPerson {
    protected $firstName; // Propiedad
    protected $lastName;
    protected $location;
    protected $birthdate;
    protected $nickName;
    protected $changeNickName = 0;

    public function __construct($firstName, $lastName, $location, $birthdate)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->location = $location;
        $this->birthdate = $birthdate;
    }

    public function setNickName($nickName): void
    {

        if($this->changeNickName >= 2){
            throw new Exception("Can't change the first name more than 2 times");
        }

        if(strlen($nickName) < 2){
            throw new Exception("The nickname needs to be at least 2 characters long");
        }

        if($nickName === $this->firstName || $nickName === $this->lastName)
        {
            throw new Exception("The nickname can't be the same as the first or last name");
        }

        $this->nickName = strtolower($nickName);
        $this->changeNickName ++;
    }
    
    public function getNickName(): string
    {
        return $this->nickName;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getFullName(): string // Metodo
    {
        return $this->firstName . " " . $this->lastName;
    }

    public function getAge(): int
    {
        $date = new DateTime($this->birthdate);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
    }
}

$person1 = new EncapsulatedPerson('José', 'Rodríguez', 'San José','2001-02-17');

$person1->setNickName('HUESO');

echo "My name is {$person1->getFullName()} but they know me like {$person1->getNickName()}.
        I'm from {$person1->getLocation()} and have {$person1->getAge()} years old";


