<?php

declare(strict_types=1);
require_once 'animal.php';

class Perro extends Animal
{
    protected string $raza;

    public function __construct(string $nombre, int $edad, string $raza)
    {
        parent::__construct($nombre, $edad);
        $this->raza = $raza;
    }

    public function sonido(): string
    {
        return "Ladra";
    }

    public function __toString(): string
    {
        return parent::__toString() . ", es de raza $this->raza y " . $this->sonido();
    }
}
