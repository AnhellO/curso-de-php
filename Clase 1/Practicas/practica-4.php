<?php

if (isset($argv[1])) {
	$nombre = $argv[1];
} else {
	die("Ingresa el nombre! >:(\n");
}

$arregloFinal = [];

$arregloFinal['arreglo'] = explode(' ', $nombre);
$arregloFinal['mayusculas'] = mb_strtoupper($nombre);
$arregloFinal['minusculas'] = mb_strtolower($nombre);
$arregloFinal['ascii'] = array_sum(array_map('ord', str_split($nombre)));
$arregloFinal['invertido'] = strrev($nombre);

echo "Arreglo Final\n" . print_r($arregloFinal, true);

$arregloFinal['arreglo'] = implode('|', $arregloFinal['arreglo']);

echo "Arreglo Final\n" . print_r(array_iunique($arregloFinal), true);

function array_iunique(array $array)
{
	return array_intersect_key(
		$array,
		array_unique(array_map('strtolower', $array))
	);
}