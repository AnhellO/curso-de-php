<?php

interface SerializerInterface
{
	public function toXml();
}

trait SerializerTrait
{
	public function toXml()
	{
		return "Serialized to XML\n";
	}


	public function setEdad($edad)
	{
		$this->edad = $edad;
	}


	public function getEdad()
	{
		return $this->edad;
	}
}

class Persona implements SerializerInterface
{
	use SerializerTrait;

	protected $nombre;

	protected $edad = 1;

	function __construct($nombre)
	{
		$this->nombre = $nombre;
	}


	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}


	public function getNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function toXml()
	{
		return sprintf("Serialized to XML from Class %s\n", __CLASS__);
	}
}

class Empleado extends Persona
{
	protected $id;

	protected $edad = 2;

	function __construct($nombre, $id)
	{
		parent::__construct($nombre);
		$this->id = $id;
	}


	public function setId($id)
	{
		$this->id = $id;
	}


	public function getId($id)
	{
		$this->id = $id;
	}


	public function toXml()
	{
		return sprintf("Serialized to XML from child Class %s\n", __CLASS__);
	}
}

echo "<pre>\n";


$persona = new Persona('Juanito Pastrana');
echo $persona->toXml();
echo $persona->getEdad() . "\n";

$empleado = new Empleado('Juanito Banana', '023hdnoi');
echo $empleado->toXml();
echo $empleado->getEdad() . "\n";


echo "</pre>\n";