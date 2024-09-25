<?php

declare(strict_types=1);

abstract class Animal
{
    protected string $nombre;
    protected int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    abstract public function sonido(): string;

    public function __toString(): string
    {
        return "Se llama $this->nombre , tiene $this->edad años";
    }
}
