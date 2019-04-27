# Práctica 3

## Alcance

Para todos los temas de estructuras de control: bloques condicionales, ciclos, include y require

## Especificaciones

Crea un script en `estados.php` que contenga un arreglo asociativo con toda la información de la siguiente tabla de los [estados de México](https://www.sport-histoire.fr/es/Geografia/Lista_estados_Mexico.php).

Crea otro script en `.php` que incluya el arreglo del script de `estados.php`, y que haga lo siguiente con el:
* Que recorra todo el arreglo
* Que evalúe el tamaño de la superficie del estado de la siguiente manera:
  * Si la superficie del estado es menor a <code>10,000km<sup>2</sup></code> imprime: `Muy poca superficie territorial`
  * Si la superficie del estado es mayor o igual a <code>10,000km<sup>2</sup></code> y menor a <code>50,000km<sup>2</sup></code> imprime: `Poca superficie territorial`
  * Si la superficie del estado es mayor o igual a <code>50,000km<sup>2</sup></code> y menor a <code>100,000km<sup>2</sup></code> imprime: `Superficie territorial promedio`
  * Si la superficie del estado es mayor o igual a <code>100,000km<sup>2</sup></code> imprime: `Gran superficie territorial`