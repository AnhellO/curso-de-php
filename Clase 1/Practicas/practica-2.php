<?php

const URL = 'https://www.url.ficticia.gob/';

$usuarios = [
	[
		'nombre' => 'Juanito',
		'apellido' => 'Pastrana',
		'url' => URL . 'juanito-pastrana'
	],
	[
		'nombre' => 'Jesus',
		'apellido' => 'De Veracruz',
		'url' => URL . 'jesus-de-veracruz'
	],
	[
		'nombre' => 'Casimiro',
		'apellido' => 'De La Buenavista',
		'url' => URL . 'casimiro-de-la-buenavista'
	],
];

echo "<h4>Ejemplo de impresión con print_r</h4>\n\n";
echo "<pre>";
print_r($usuarios);
echo "</pre>";

echo "<h4>Ejemplo de impresión con una etiqueta table</h4>\n\n";
echo "<table>\n";
echo "<tr>\n";
echo "<th>Nombre</th>\n";
echo "<th>Apellido</th>\n";
echo "<th>Link</th>\n";
echo "</tr>\n";
foreach ($usuarios as $usuario) {
	echo "<tr>\n";
	echo "<td>{$usuario['nombre']}</td>\n";
	echo "<td>{$usuario['apellido']}</td>\n";
	echo "<td>{$usuario['url']}</td>\n";
	echo "</tr>\n";
}
echo "</table>";