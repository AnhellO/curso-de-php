<?php

require 'vendor/autoload.php';
use Faker\Factory;

echo "<pre>";

use App\Conexion;
use App\Tablas;

$pdo = (new Conexion())->connect();
$faker = Factory::create();

if ($pdo != null) {
	echo "Conectado!\n";
	var_dump($pdo);
} else {
	echo "Error en la conexión!\n";
}

$tableCreator = new Tablas($pdo);
echo "Creamos tabla usuarios con query {$tableCreator->getQueryTabla('usuarios')}\n";
echo "Resultado: \n" . $tableCreator->createTabla('usuarios') . "\n";
echo "Creamos tabla ordenes con query {$tableCreator->getQueryTabla('ordenes')}\n";
echo "Resultado: \n" . $tableCreator->createTabla('ordenes') . "\n";
print_r($tableCreator->getListaTablas());
print_r($tableCreator->insertUsuario([
		'nombre' => $faker->name,
		'password' => $faker->password
	]));

echo "</pre>";