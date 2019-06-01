<?php

require 'vendor/autoload.php';
use Faker\Factory;

echo "<pre>";

use App\Conexion;
use App\ORM;

$pdo = (new Conexion())->connect();
$faker = Factory::create();

if ($pdo != null) {
	echo "Conectado!\n";
	var_dump($pdo);
} else {
	echo "Error en la conexión!\n";
}

$tableCreator = new ORM($pdo);
echo "Creamos tabla usuarios con query {$tableCreator->getQueryTabla('usuarios')}\n";
echo "Resultado: \n" . $tableCreator->createTabla('usuarios') . "\n";
echo "Creamos tabla ordenes con query {$tableCreator->getQueryTabla('ordenes')}\n";
echo "Resultado: \n" . $tableCreator->createTabla('ordenes') . "\n";
print_r($tableCreator->getListaTablas());
echo $tableCreator->insertUsuario([
		'nombre' => $faker->name,
		'password' => $faker->password
	]) . "\n";

echo $tableCreator->updateUsuario(31, [
		'nombre' => $faker->name,
		'password' => $faker->password
	]) . "\n";

echo $tableCreator->deleteUsuario(30) . "\n";

$rowObject = $tableCreator->selectUsuario(31);
echo "Registro {$rowObject->id}:\n\tName: {$rowObject->nombre}\n\tPassword: {$rowObject->password}\n";

echo "</pre>";