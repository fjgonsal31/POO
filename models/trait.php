<?php

declare(strict_types=1);

trait Logeable
{
    private string $logFile = 'app.log';

    public function log(string $mensaje): void
    {
        $timestamp = date('d-m-Y H:i:s');
        $logMensaje = "[{$timestamp}] {$mensaje}\n";
        file_put_contents($this->logFile, $logMensaje, FILE_APPEND);
    }

    public function setFilename(string $filename): void
    {
        $this->logFile = $filename;
    }
}

class User
{
    use Logeable;
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        $this->log("Usuario logueado: " . $this->nombre);
    }

    public function __get($propiedad): string
    {
        return $this->$propiedad;
    }
}
