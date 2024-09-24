<?php

declare(strict_types=1);

class Persona
{
    private string $nombre;
    private int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function __get(string $propiedad): mixed
    {
        return $this->$propiedad;
    }

    public function __set(string $propiedad, $valor): void
    {
        $this->$propiedad = $valor;
    }

    public function saludar(): string
    {
        return "Hola me llamo $this->nombre y tengo $this->edad años.";
    }
}
