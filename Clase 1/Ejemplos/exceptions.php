<?php

echo "<pre>\n";

class CustomException extends Exception
{
	function __construct($message = '', $code, $ex)
	{
		parent::__construct($message, 5, $ex);
	}
}

try {
	throw new CustomException("Mensaje Custom", 5, new Exception('encadenada'));
	echo "No se lanza ninguna excepción\n";
} catch (Throwable $e) {
	var_dump($e);
} finally {
	echo "Este finally se ejecuta\n";
}

echo "</pre>\n";