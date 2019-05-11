# Práctica 5

## Alcance

Para los temas de clases, interfaces y objetos.

## Especificaciones

Crear una clase de `Usuario` que inicialize algunos atributos comunes que podría tener el usuario de una aplicación:
* Nombre: Tipo string
* Fecha de registro: Tipo `DateTime`
* Password: Este deberá generarse automáticamente en base a un hash md5 de la fecha + el nombre
* Deberá de sobreescribirse el método mágico `__toString()` para poder obtener una representación del objeto como string

Al final deberán de crearse un arreglo con algunas instancias de la clase que pongan a prueba la funcionalidad de la clase.