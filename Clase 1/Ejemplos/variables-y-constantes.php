<?php

// Declarando variables
$string = "Hello World!";
$numero = 10;

// Declarando constantes
const CONSTANTE1 = "No cambia";
define("CONSTANTE2", 3.1416);

echo $string . "\n";
echo $numero . "\n";
echo CONSTANTE1 . "\n";
echo CONSTANTE2 . "\n";

// Probando otros tipos de datos
$var1 = 123;
$var2 = -123;
$var3 = 0x1A;
$var4 = 0b101;

$var5 = 'Hola Mundo';
$var6 = "Hola Mundo";
$var7 = 'Hola\'nt Mundo';

$var8 = 123;
$var9 = 10.2e3;
$var10 = 4E-10;

$var11 = true;
$var12 = false;

$var13 = null;

echo "{$var1}\n";
echo "{$var2}\n";
echo "{$var3}\n";
echo "{$var4}\n";
echo "{$var5}\n";
echo "{$var6}\n";
echo "{$var7}\n";
echo "{$var8}\n";
echo "{$var9}\n";
echo "{$var10}\n";
echo "{$var11}\n";
echo "{$var12}\n";
echo "{$var13}\n";