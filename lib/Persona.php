<?php

class Persona
{
    public $name;
    public $surname;
    public $age;

    public function __construct(
        string    $name,
        string    $surname,
        int       $age
    ) {
        $this->name     = $name;
        $this->surname  = $surname;
        $this->age      = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function mayorDeEdad(){
        if($this->age >= 18){
            return "Si";
        }
        return "No";
    }
}