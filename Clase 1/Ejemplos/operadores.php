<?php

$n1 = 2;
$n2 = 3;

// Operadores aritméticos
echo 'Operador - = ' . (-$n1) . "\n";
echo 'Operador + = ' . (+$n1) . "\n";
echo 'Operador + = ' . ($n1 + $n2) . "\n";
echo 'Operador - = ' . ($n1 - $n2) . "\n";
echo 'Operador * = ' . ($n1 * $n2) . "\n";
echo 'Operador / = ' . ($n1 / $n2) . "\n";
echo 'Operador % = ' . ($n1 % $n2) . "\n";
echo 'Operador ** = ' . ($n1 ** $n2) . "\n";

$n1 = 2;
$n2 = 3;

// Operadores de asignación
echo 'Operador += = ' . ($n1 += $n2) . "\n";
echo 'Operador -= = ' . ($n1 -= $n2) . "\n";
echo 'Operador *= = ' . ($n1 *= $n2) . "\n";
echo 'Operador /= = ' . ($n1 /= $n2) . "\n";
echo 'Operador %= = ' . ($n1 %= $n2) . "\n";
echo 'Operador **= = ' . ($n1 **= $n2) . "\n";

$n1 = 2;
$n2 = 3;

// Operadores bitwise
echo 'Operador & = ' . ($n1 & $n2) . "\n";
echo 'Operador | = ' . ($n1 | $n2) . "\n";
echo 'Operador ^ = ' . ($n1 ^ $n2) . "\n";
echo 'Operador ~ = ' . (~$n1) . "\n";
echo 'Operador << = ' . ($n1 << $n2) . "\n";
echo 'Operador >> = ' . ($n1 >> $n2) . "\n";

$n1 = 2;
$n2 = 3;

// Operadores bitwise con asignación
echo 'Operador &= = ' . ($n1 &= $n2) . "\n";
echo 'Operador |= = ' . ($n1 |= $n2) . "\n";
echo 'Operador ^= = ' . ($n1 ^= $n2) . "\n";
echo 'Operador <<= = ' . ($n1 <<= $n2) . "\n";
echo 'Operador >>= = ' . ($n1 >>= $n2) . "\n";

$n1 = 2;
$n2 = 3;

// Operadores de comparación
echo 'Operador == = ' . ($n1 == $n2) . "\n";
echo 'Operador === = ' . ($n1 === $n2) . "\n";
echo 'Operador != = ' . ($n1 != $n2) . "\n";
echo 'Operador <> = ' . ($n1 <> $n2) . "\n";
echo 'Operador !== = ' . ($n1 !== $n2) . "\n";
echo 'Operador < = ' . ($n1 < $n2) . "\n";
echo 'Operador > = ' . ($n1 > $n2) . "\n";
echo 'Operador <= = ' . ($n1 <= $n2) . "\n";
echo 'Operador >= = ' . ($n1 >= $n2) . "\n";
echo 'Operador <=> = ' . ($n1 <=> $n2) . "\n";
echo 'Operador ?? = ' . ($n3 ?? $n2) . "\n";
echo 'Operador ?: = ' . ($n1 == 2 ?: $n2) . "\n";
echo 'Operador Ternary = ' . ($n1 == 3 ? $n1 : $n2) . "\n";

// Operadores para manejo de errores
echo 'Operador @ = ' . @$numeros[0] . "\n";

// Operadores de ejecución
$resultado = `pwd`;
echo 'Operador `` = ' . $resultado . "\n";

// Operadores de incremento/decremento
echo 'Operador ++ = ' . ($n1++) . "\n";
echo 'Operador '  . ($n1) . "\n";
echo 'Operador ++ = ' . (++$n1) . "\n";
echo 'Operador -- = ' . ($n1--) . "\n";
echo 'Operador '  . ($n1) . "\n";
echo 'Operador -- = ' . (--$n1) . "\n";

// Operadores lógicos
echo 'Operador and = ' . (true and false) . "\n";
echo 'Operador or = ' . (true or false) . "\n";
echo 'Operador xor = ' . (true xor false) . "\n";
echo 'Operador ! = ' . (!true) . "\n";
echo 'Operador && = ' . (true && false) . "\n";
echo 'Operador || = ' . (true || false) . "\n";

// Operadores de strings
$string = '2';
echo 'Operador .= = ' . ($string .= ' = dos') . "\n";

// Operadores de arreglos
$pares = [2, 4, 6, 8, 10];
$impares = [1, 3, 5, 7, 9];
print_r($pares + $impares);
echo 'Operador == = ' . ($pares == $impares) . "\n";
echo 'Operador === = ' . ($pares === $impares) . "\n";
echo 'Operador != = ' . ($pares != $impares) . "\n";
echo 'Operador <> = ' . ($pares <> $impares) . "\n";
echo 'Operador !== = ' . ($pares !== $impares) . "\n";