<?php

include 'estados.php';

echo "<h4>Imprimendo arreglo de estados</h4>\n";
echo "<pre>\n";
print_r($estados);
echo "</pre>\n";

echo "<h4>Imprimendo validaciones</h4>\n";
foreach ($estados as $estado => $datos) {
	if ($datos['superficie'] < 10000) {
		echo "<strong>{$datos['nombre']}</strong>: Muy poca superficie territorial de {$datos['superficie']}<br>";
	} elseif ($datos['superficie'] >= 10000  && $datos['superficie'] < 50000) {
		echo "<strong>{$datos['nombre']}</strong>: Poca superficie territorial de {$datos['superficie']}<br>";		
	} elseif ($datos['superficie'] >= 50000 && $datos['superficie'] < 100000) {
		echo "<strong>{$datos['nombre']}</strong>: Superficie territorial promedio de {$datos['superficie']}<br>";
	} else {
		echo "<strong>{$datos['nombre']}</strong>: Gran superficie territorial de {$datos['superficie']}<br>";
	}
}