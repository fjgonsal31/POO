<?php

declare(strict_types=1);

class Coche
{
    private string $marca;
    private string $modelo;
    private int $ano;

    public function __construct(string $marca, string $modelo, int $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function __get(string $propiedad): mixed
    {
        return $this->$propiedad;
    }

    public function __set(string $propiedad, $valor): void
    {
        $this->$propiedad = $valor;
    }

    public function __toString()
    {
        return "Coche $this->marca $this->modelo del año $this->ano.";
    }
}
