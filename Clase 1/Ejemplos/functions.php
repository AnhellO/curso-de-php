<?php

$string = 'Hola SEFIRC';

function pasoPorValor($string)
{
	$string = strtolower($string);
	return $string;
}

pasoPorValor($string);
echo "Paso por valor: {$string}<br>\n";

function pasoPorReferencia(&$string)
{
	$string = strtolower($string);
}

pasoPorReferencia($string);
echo "Paso por referencia: {$string}<br>\n";

function argumentosDefault(string $string = 'default')
{
	return strtoupper($string);
}

echo "Argumentos default: " . argumentosDefault() . "<br>\n";

function pruebaReplace($string)
{
	return str_ireplace(['a', 'e', 'i', 'o', 'u'], '_', strtoupper($string));
}

$miFuncion = 'pruebaReplace';
echo "Funciones variables: " . $miFuncion($string) . "<br>\n";

$arreglo = ['mi', 'arreglo', 'de', 'strings'];
echo "<pre>";
print_r(array_map(function ($string) {
	if (strlen($string) > 5) {
		return str_ireplace(['a', 'e', 'i', 'o', 'u'], '_', strtoupper($string));
	}

	return $string;
}, $arreglo));
echo "</pre>";

$arreglo = ['mi', 'arreglo', 'de', 'strings', 'STRINGS'];
echo "<pre>";
print_r(array_unique($arreglo));
echo "</pre>";