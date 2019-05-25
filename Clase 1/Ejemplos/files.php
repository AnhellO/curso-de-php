<?php

echo "<pre>\n";

$contenido = file_get_contents('mi-archivo.txt');
var_dump($contenido);

file_put_contents('mi-archivo.txt', "Juanito Pastrana was here\n");

// Falla intencionalmente
$contenido = file_get_contents('archivo-no-existente.md');
var_dump($contenido);

echo __FILE__ . "\n\n";

echo "Mi archivo: " . __FILE__. "\n";
echo  "Su directorio: " . dirname(__FILE__) . "\n";
echo  "El directorio de su directorio: " . dirname(dirname(__FILE__)) . "\n";
echo  "El directorio del directorio de su directorio: " . dirname(dirname(dirname(__FILE__))) . "\n";

$contenido = file_get_contents(dirname(dirname(dirname(__FILE__))) . '/TEMARIO.md');
var_dump($contenido);

chmod('mi-archivo.txt', 0777);

print_r(stat('mi-archivo.txt'));

// echo file_get_contents('https://www.php.net/manual/en/function.fopen.php') . "\n";

$handler = fopen('mi-archivo.txt', 'a');
echo 'Tamaño: ' . filesize('mi-archivo.txt') . "\n";
fwrite($handler, "Juan Pastrana strikes again\n");
fclose($handler);

echo file_get_contents('mi-archivo.txt') . "\n";

echo "</pre>\n";
