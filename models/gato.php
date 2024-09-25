<?php

declare(strict_types=1);
require_once 'animal.php';

class Gato extends Animal
{
    protected bool $es_domestico;

    public function __construct(string $nombre, int $edad, bool $es_domestico)
    {
        parent::__construct($nombre, $edad);
        $this->es_domestico = $es_domestico;
    }

    public function sonido(): string
    {
        return "Maulla";
    }

    public function __toString(): string
    {
        $tipo = ($this->es_domestico) ? ' es doméstico ' : ' vive en la calle ';

        return parent::__toString() . ', ' . $tipo . " y " . $this->sonido();
    }
}
