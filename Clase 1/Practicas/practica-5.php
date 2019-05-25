<?php

echo "<pre>\n";

class Usuario
{
	protected $nombre;

	protected $registro;

	protected $password;

	const formatoFecha = 'Y-m-d';

	function __construct(string $nombre, string $registro)
	{
		$this->nombre = $nombre;
		$this->registro = DateTime::createFromFormat(self::formatoFecha, $registro);
		$this->password = $this->generatePassword($this->nombre, $this->registro);
	}


	public function setNombre(string $nombre)
	{
		$this->nombre = $nombre;
		$this->password = $this->generatePassword($this->nombre, $this->registro);

		return $this;
	}


	public function getNombre()
	{
		return $this->nombre;
	}


	public function getRegistro()
	{
		return $this->registro;
	}


	private function generatePassword($nombre, $registro)
	{
		return md5($nombre . $registro->format(self::formatoFecha));
	}


	public function getPassword()
	{
		return $this->password;
	}
}

$user = new Usuario('Juanito Pastrana', '2019-05-24');
print_r($user);

echo "</pre>\n";
