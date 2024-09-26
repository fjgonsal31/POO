<?php

declare(strict_types=1);

require_once __DIR__ . '/models/autoload.php';
require_once __DIR__ . '/models/trait.php';

$director1 = new Director(1, 'Pepe', 'Perez Ruiz', '1990-07-31', '2024-09-24', 'Sin comentarios');

$director1->__set('nombre', 'Francisco Javier');
$director1->__set('apellidos', 'González Salcedo');
$director1->__set('f_nacimiento', '1990-07-31');
$director1->__set('creado', '1991-11-28');

echo $director1->__get('nombre');
echo '<br><br>';
var_dump($director1);
echo '<br><br>';
print_r($director1);
echo '<br><br>';
echo ($director1);
echo '<br><br>';

$pelicula1 = new Pelicula(1, 'Ghost', 19.0, $director1);
$pelicula1->__set('id', 31);
$pelicula1->__set('titulo', 'Titanic');
$pelicula1->__set('precio', 31.5);

echo $pelicula1->__get('titulo');
echo '<br><br>';
var_dump($pelicula1);
echo '<br><br>';
print_r($pelicula1);
echo '<br><br>';
echo ($pelicula1);
echo '<br><br>';

// crear clase persona
// atributos: nombre y edad
// metodo publico saludar que devuelva 'hola me llamo $nombre y tengo $edad años

$persona1 = new Persona('Pepe', 34);
$persona1->__set('nombre', 'Fran');
echo $persona1->saludar();
echo '<br><br>';

// crear clase coche
// atributos: marca, modelo y año
// contructor
// metodo __toString que devuelva 'coche $marca $modelo del año $año'

$coche1 = new Coche('Renault', 'Megane', 2012);
$coche1->__set('ano', 2011);
echo $coche1;
echo '<br><br>';
$perro1 = new Perro('Lola', 4, 'Chihuahua');
echo $perro1;
echo '<br><br>';
$gato1 = new Gato('Michi', 2, false);
echo $gato1;
echo '<br><br>';
$cuadrado1 = new Cuadrado(2);
echo $cuadrado1->mostrarArea();
echo '<br><br>';
$circulo1 = new Circulo(2);
echo $circulo1->mostrarArea();
echo '<br><br>';

$suscripcion1 = new PlanSuscripcion(PlanSuscripcion::PLAN_BASICO);
echo $suscripcion1->obtenerPrecio();
$planes = PlanSuscripcion::obtenerPlanesPrecios();
echo '<br><br>';
var_dump($planes);
echo '<br><br>';

foreach ($planes as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}
echo '<br>';


//  Crea una clase llamada CuentaBancaria que simule las operaciones bancarias básicas:
//  Debe tener una propiedad privada $saldo
//  Debe tener un constructor que inicialice el saldo
//  Debe tener 3 métodos públicos: depositar($cantidad) añade la cantidad al saldo si es positiva y devuelve true, sino, devuelve false. retirar($cantidad) resta la cantidad del saldo si hay suficiente saldo y la cantidad es positiva, devuelve true si se realiza la operación, false si no. obtenerSaldo() devuelve el saldo actual.

$deposito = 10;
$reintegro = 60;
$banca1 = new CuentaBancaria(100);
echo "Dispones de: " . $banca1->obtenerSaldo() . " €";
echo '<br>';

if ($banca1->depositar($deposito)) {
    echo "Has depositado: $deposito €";
} else {
    echo " No has podido depositar $deposito €";
}

echo '<br>';
echo "Dispones de: " . $banca1->obtenerSaldo() . " €";
echo '<br>';

if ($banca1->retirar($reintegro)) {
    echo "Has retirado: $reintegro €";
} else {
    echo " No has podido retirar $reintegro € de " . $banca1->obtenerSaldo() . " € que dispones";
}

echo '<br>';
echo "Dispones de: " . $banca1->obtenerSaldo() . " €";

// Crea una clase llamada ConvertidorMoneda que permita realizar conversiones entre dólares y euros.
// La clase debe cumplir los siguientes requisitos:
// La clase debe tener dos propiedades estáticas privadas: $tasaDolarEuro inicializada con un valor 0.85 y $tasaEuroDolar inicializada con un valor 1.18
// Implementa los siguientes métodos estáticos: 
// dolaresaEuros(float $dolares):float - convierte dólares a euros
// eurosaDolares(float $euros):float - convierte euros a dólares
// actualizarTasas(float $nuevaTasaDolarEuro, float $nuevaTasaEuroDolar):void - actualiza las tasas de cambio
// obtenerTasasActuales():array Devuelve un array con las tasas de cambio actuales
// Crea un script para probar la clase:
// Realiza conversiones de 100 dólares a euros y 100 euros a dólares
// Actualiza las tasas de cambio a 0.82 para dólar a  euro y 1.22 para euro a dólar
// Realiza nuevamente las conversiones con las tasas actualizadas
// Muestra las tasas de cambio actuales

$cantidad = 100;
$dolarAeuro = ConvertidorMoneda::dolaresaEuros($cantidad);
echo $cantidad . " $ son " . $dolarAeuro . " €";
echo '<br>';
ConvertidorMoneda::actualizarTasas(0.82, 1.22);

foreach (ConvertidorMoneda::obtenerTasasActuales() as $key => $value) {
    if ($key == 0) {
        echo "La nueva tasa de conversión de Dolar al Euro es: $value <br>";
    }
    if ($key == 1) {
        echo "La nueva tasa de conversión de Euro al Dolar es: $value <br>";
    }
}

$dolarAeuro = ConvertidorMoneda::dolaresaEuros($cantidad);
echo $cantidad . " $ son " . $dolarAeuro . " €";
echo '<br>';

$euroAdolar = ConvertidorMoneda::eurosaDolares($cantidad);
echo $cantidad . " € son " . $euroAdolar . " $";
echo '<br>';

$user1 = new User('Fran');
$user1 = new User('Javi');
