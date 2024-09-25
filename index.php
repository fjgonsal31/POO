<?php

declare(strict_types=1);

require_once __DIR__ . '/models/pelicula.php';
require_once __DIR__ . '/models/director.php';
require_once __DIR__ . '/models/persona.php';
require_once __DIR__ . '/models/coche.php';
require_once __DIR__ . '/models/perro.php';
require_once __DIR__ . '/models/gato.php';
require_once __DIR__ . '/models/cuadrado.php';
require_once __DIR__ . '/models/circulo.php';
require_once __DIR__ . '/models/plan_suscripcion.php';
/*
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
echo '------------------------------------------------------------';
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


// crear clase persona
// atributos: nombre y edad
// metodo publico saludar que devuelva 'hola me llamo $nombre y tengo $edad años

echo '<br><br>';
echo '------------------------------------------------------------';
echo '<br><br>';

$persona1 = new Persona('Pepe', 34);
$persona1->__set('nombre', 'Fran');
echo $persona1->saludar();

// crear clase coche
// atributos: marca, modelo y año
// contructor
// metodo __toString que devuelva 'coche $marca $modelo del año $año'

echo '<br><br>';
echo '------------------------------------------------------------';
echo '<br><br>';

$coche1 = new Coche('Renault', 'Megane', 2012);
$coche1->__set('ano', 2011);
echo $coche1;

echo '<br><br>';
echo '------------------------------------------------------------';
echo '<br><br>';

$perro1 = new Perro('Lola', 4, 'Chihuahua');
echo $perro1;

echo '<br><br>';
echo '------------------------------------------------------------';
echo '<br><br>';

$gato1 = new Gato('Michi', 2, false);
echo $gato1;

echo '<br><br>';
echo '------------------------------------------------------------';
echo '<br><br>';

$cuadrado1 = new Cuadrado(2);
echo $cuadrado1->mostrarArea();

echo '<br><br>';
echo '------------------------------------------------------------';
echo '<br><br>';

$circulo1 = new Circulo(2);
echo $circulo1->mostrarArea();
*/

$suscripcion1 = new PlanSuscripcion(PlanSuscripcion::PLAN_BASICO);
echo $suscripcion1->obtenerPrecio();
$planes = PlanSuscripcion::obtenerPlanesPrecios();
echo '<br><br>';
var_dump($planes);
echo '<br><br>';

foreach ($planes as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}
