<?php

declare(strict_types=1);

class Director
{
    private int $id;
    private string $nombre;
    private string $apellidos;
    private DateTime $f_nacimiento;
    private DateTime $creado;
    private string $biografia;

    public function __construct(int $id, string $nombre, string $apellidos, string $f_nacimiento, string $creado, string $biografia)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->f_nacimiento = new DateTime($f_nacimiento);
        $this->creado = new DateTime($creado);
        $this->biografia = $biografia;
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
                    $this->$propiedad = $valor;
                    break;
                case 'nombre':
                case 'apellidos':
                case 'biografia':
                    if (!is_string($valor)) {
                        throw new TypeError("El valor de {$propiedad} debe ser una cadena.");
                    }
                    $this->$propiedad = $valor;
                    break;
                case 'f_nacimiento':
                case 'creado':
                    if (!is_string($valor) && !$valor instanceof DateTime) {
                        throw new TypeError("El valor de {$propiedad} debe ser una cadena o un objeto DateTime.");
                    }
                    if (is_string($valor)) {
                        $this->$propiedad = new DateTime($valor);
                    } else {
                        $this->$propiedad = $valor;
                    }
                    break;
                default:
                    throw new Exception("Propiedad {$propiedad} no existe.");
            }
        } else {
            throw new Exception("Propiedad {$propiedad} no existe.");
        }
    }

    public function __toString(): string
    {
        return sprintf(
            "%d %s %s %s %s %s",
            $this->id,
            $this->nombre,
            $this->apellidos,
            $this->f_nacimiento->format('d-m-Y'),
            $this->creado->format('d-m-Y'),
            $this->biografia
        );
    }
}
