<?php

$string = 'Mundo';

// Imprimimos nuestro string de diferentes maneras
echo "Hola, " . $string . "\n";
echo "Hola, {$string}!\n";
echo "Hola, $string!\n";
echo 'Hola, $string!\n' . "\n";
echo "Hola, " . $string[0] . "!\n";
echo "Hola, {$string[0]}!\n";
echo "Hola, $string[0]!\n";

// Modificamos nuestro string y volvemos a imprimirlo
$string[4] = '0';
echo "Hola, {$string}!\n";

// Imprimimos strings con comilla simple
echo 'Hola\tMundo!' . "\n";
echo "Hola\tMundo!\n";
echo 'Hola Mundon\'t!' . "\n";

/**
 * Secuencias de escapado:
 * - \n es remplazado con el caracter de newline
 * - \r es remplazado con el caracter de carriage-return
 * - \t es remplazado con el caracter de tab
 * - \$ es remplazado con el signo de dolar ($)
 * - \" es remplazado con comillas dobles simples (")
 * - \\ es remplazado con el caracter de backslash (\)
 * - \' es remplazado con la comilla sencilla simple (')
 */