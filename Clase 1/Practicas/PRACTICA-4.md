# Práctica 4

## Alcance

Para todos los temas de funciones.

## Especificaciones

Crea un script en `.php` que lea un nombre completo desde línea de comandos y lleve a cabo las siguientes operaciones con él:
* Convertirlo a un slug válido
  * Ejemplo: `Luisito Pérez` a `luisito-perez`
* Convertirlo a mayúsculas
  * Ejemplo: `Luisito Pérez` a `LUISITO PÉREZ`
* Convertirlo a minúsculas
  * Ejemplo: `Luisito Pérez` a `luisito pérez`
* Convertirlo a su valor total en ASCII (es decir, la suma del valor de cada caractér del string en ASCII)
  * Ejemplo: `Luisito Pérez` a `1427`
* Invertir el nombre de la persona
  * Ejemplo: `Luisito Pérez` a `zeréP otisiuL`

El script deberá de guardar los valores resultantes de cada una de las operaciones anteriores en un arreglo, y deberá imprimirlo a consola de la siguiente manera:
* Imprimir el arreglo completo después de insertar todos los resultados de las operaciones con el string
* Imprimir una versión unique del arreglo después de comparar insensitivamente todos sus elementos