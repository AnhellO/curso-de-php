<?php

// Arreglo indexado
$marcas_de_autos = array('Mazda', 'BMW', 'Audi');

// Arreglo asociativo
$autos = array(
	'Mazda' => 'gris',
	'BMW' => 'blanco',
	'Audi' => 'negro'
);

// Arreglo multidimensional
$usuarios = array(
	'Pedro' => array(
		'edad' => 35,
		'peso' => 100.23,
		'email' => 'pedro@mail.test'
	),
	'Pablo' => array(
		'edad' => 32,
		'peso' => 80.5,
		'email' => 'pablo@mail.test'
	),
	'Picapiedra' => array(
		'edad' => 40,
		'peso' => 99.99,
		'email' => 'picapiedra@mail.test'
	),
);

// Actualizando los valores en los arreglos
$marcas_de_autos[0] = 'Mercedes Benz';
$marcas_de_autos[4] = 'Ferrari';

$autos['Mazda'] = 'rojo';

$usuarios['Pedro']['peso'] = 110.5;
$usuarios['Picapiedra'] = null;

// Imprimiendo nuestros arreglos con print_r
print_r($marcas_de_autos);
print_r($autos);
print_r($usuarios);

// Imprimiendo nuestros arreglos con var_dump
var_dump($marcas_de_autos);
var_dump($autos);
var_dump($usuarios);

// Declarando arreglas utilizando los operadores []
$otro_arreglo = ['mas', 'arreglos', true, 10];
print_r($otro_arreglo);