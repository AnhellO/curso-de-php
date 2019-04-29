<?php

// Ciclo while
$i = 0;
while ($i < 10) {
	$i++;
	echo "Estamos en el while con la iteración: {$i}\n";
}

// Ciclo do-while
do {
	$i++;
	echo "Estamos en el do-while con la iteración: {$i}\n";
} while ($i < 20);


// Ciclo for
for ($i=0; $i < 10; $i++) { 
	echo "Estamos en el for con la iteración: {$i}\n";
}

// Switch
$letra = 'z';
switch ($letra) {
	case 'a':
	case 'e':
	case 'i':
	case 'o':
	case 'u':
		echo "Esta es una vocal: {$letra}\n";
		break;
	default:
		echo "Esta no es una vocal: {$letra}\n";
}

// Ciclo foreach
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

foreach ($usuarios as $nombre => $datos) {
	echo "Este es el usuario {$nombre}, y sus datos son:\n";
	foreach ($datos as $dato => $valor) {
		echo "\t{$dato} => {$valor}\n";
	}
}

print_r($usuarios);