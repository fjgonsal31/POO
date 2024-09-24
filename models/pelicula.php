<?php

class Pelicula
{
    private int $id;
    private string $titulo;
    private float $precio;
    private Director $director;

    public function __construct(int $id, string $titulo, float $precio, Director $director)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->precio = $precio;
        $this->director = $director;
    }

    public function __get(string $propiedad): mixed
    {
        return $this->$propiedad;
    }

    public function __set(string $propiedad, $valor): void
    {
        if (property_exists($this, $propiedad)) {
            switch ($propiedad) {
                case 'id':
                    if (!is_int($valor)) {
                        throw new TypeError("El valor de {$propiedad} debe ser un entero.");
                    }
                    break;
                case 'titulo':
                    if (!is_string($valor)) {
                        throw new TypeError("El valor de {$propiedad} debe ser una cadena.");
                    }
                    break;
                case 'precio':
                    if (!is_float($valor) && !is_int($valor)) {
                        throw new TypeError("El valor de {$propiedad} debe ser un número entero o decimal.");
                    }
                    break;
                case 'director':
                    if (!$valor instanceof Director) {
                        throw new TypeError("El valor de {$propiedad} debe ser un objeto Director.");
                    }
                    break;
                default:
                    throw new Exception("Propiedad {$propiedad} no existe.");
            }
            $this->$propiedad = $valor;
        } else {
            throw new Exception("Propiedad {$propiedad} no existe.");
        }
    }

    public function __toString(): string
    {
        return sprintf(
            "%d %s %.2f %s",
            $this->id,
            $this->titulo,
            $this->precio,
            $this->director->__toString()
        );
    }
}
