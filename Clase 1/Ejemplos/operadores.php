<?php

$n1 = 2;
$n2 = 3;

// Operadores aritméticos
echo (-$n1) . "\n";
echo (+$n1) . "\n";
echo ($n1 + $n2) . "\n";
echo ($n1 - $n2) . "\n";
echo ($n1 * $n2) . "\n";
echo ($n1 / $n2) . "\n";
echo ($n1 % $n2) . "\n";
echo ($n1 ** $n2) . "\n";

$n1 = 2;
$n2 = 3;

// Operadores de asignación
echo ($n1 += $n2) . "\n";
echo ($n1 -= $n2) . "\n";
echo ($n1 *= $n2) . "\n";
echo ($n1 /= $n2) . "\n";
echo ($n1 %= $n2) . "\n";
echo ($n1 **= $n2) . "\n";

$n1 = 2;
$n2 = 3;

// Operadores bitwise
echo ($n1 & $n2) . "\n";
echo ($n1 | $n2) . "\n";
echo ($n1 ^ $n2) . "\n";
echo (~$n1) . "\n";
echo ($n1 << $n2) . "\n";
echo ($n1 >> $n2) . "\n";

$n1 = 2;
$n2 = 3;

// Operadores bitwise con asignación
echo ($n1 &= $n2) . "\n";
echo ($n1 |= $n2) . "\n";
echo ($n1 ^= $n2) . "\n";
echo ($n1 <<= $n2) . "\n";
echo ($n1 >>= $n2) . "\n";

$n1 = 2;
$n2 = 3;

// Operadores de comparación
echo ($n1 == $n2) . "\n";
echo ($n1 === $n2) . "\n";
echo ($n1 != $n2) . "\n";
echo ($n1 <> $n2) . "\n";
echo ($n1 !== $n2) . "\n";
echo ($n1 < $n2) . "\n";
echo ($n1 > $n2) . "\n";
echo ($n1 <= $n2) . "\n";
echo ($n1 >= $n2) . "\n";
echo ($n1 <=> $n2) . "\n";
echo ($n3 ?? $n2) . "\n";
echo ($n1 == 2 ?: $n2) . "\n";
echo ($n1 == 3 ? $n1 : $n2) . "\n";

// Operadores para manejo de errores
echo @$numeros[0] . "\n";

// Operadores de ejecución
$resultado = `pwd`;
echo $resultado . "\n";

// Operadores de incremento/decremento
echo ($n1++) . "\n";
echo ($n1) . "\n";
echo (++$n1) . "\n";
echo ($n1--) . "\n";
echo ($n1) . "\n";
echo (--$n1) . "\n";

// Operadores lógicos
echo (true and false) . "\n";
echo (true or false) . "\n";
echo (true xor false) . "\n";
echo (!true) . "\n";
echo (true && false) . "\n";
echo (true || false) . "\n";

// Operadores de strings
$string = '2';
echo ($string .= ' = dos') . "\n";

// Operadores de arreglos
$pares = [2, 4, 6, 8, 10];
$impares = [1, 3, 5, 7, 9];
print_r($pares + $impares);
echo ($pares == $impares) . "\n";
echo ($pares === $impares) . "\n";
echo ($pares != $impares) . "\n";
echo ($pares <> $impares) . "\n";
echo ($pares !== $impares) . "\n";