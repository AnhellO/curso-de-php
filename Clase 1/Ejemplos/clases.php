<?php

// Clases básicas
class Persona implements Serializador
{
	protected $genero;
	protected $nombre;
	protected $edad;
	protected $peso;
	protected $estatura;

	function __construct(
		string $genero,
		string $nombre = '',
		int $edad = -1,
		float $peso = 0.0,
		float $estatura = 0.0
	)
	{
		$this->genero = $genero;
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->peso = $peso;
		$this->estatura = $estatura;
	}


	public function setGenero($genero)
	{
		$this->genero = $genero;
	}


	public function getGenero()
	{
		return $this->genero;
	}


	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}


	public function getNombre()
	{
		return $this->nombre;
	}


	public function setEdad($edad)
	{
		$this->edad = $edad;
	}


	public function getEdad()
	{
		return $this->edad;
	}


	public function setPeso($peso)
	{
		$this->peso = $peso;
	}


	public function getPeso()
	{
		return $this->peso;
	}


	public function setEstatura($estatura)
	{
		$this->estatura = $estatura;
	}


	public function getEstatura()
	{
		return $this->estatura;
	}


	public function calcularIMC()
	{
		return $this->peso / ($this->estatura ** 2);
	}

	// Magic functions
	public function __toString()
	{
		return
			"Genero: {$this->genero}\n" .
			"Nombre: {$this->nombre}\n" .
			"Edad: {$this->edad}\n" .
			"Peso: {$this->peso}\n" .
			"Estatura: {$this->estatura}\n";
	}


	public function json()
	{
		return json_encode(get_object_vars($this));
	}

	public function xml()
	{
		return 'Lo convertí a XML!';
	}

	public function texto()
	{
		return $this->__toString();
	}
}

$persona = new Persona('M', 'Luisito Contreras', 30);
$miFuncion = 'setEstatura';
$persona->$miFuncion(1.75);
$miFuncion = 'setPeso';
$persona->$miFuncion(75.0);

echo "<pre>\nMi Objeto: \n";
echo($persona);

// Accediendo a las propiedades y funciones de la clase
$reflection = new ReflectionClass($persona);

echo "\nSus Metodos y Funciones: \n";
print_r(get_class_methods('Persona'));
echo "\nSus Propiedades: \n";
$properties = [];
foreach ($reflection->getProperties() as $property) {
	$properties[] = $property->getName();
}
print_r($properties);

echo "El IMC es igual a: {$persona->calcularIMC()}";
echo "</pre>";

// Herencia
class Empleado extends Persona
{
	protected $numEmpleado;
	protected $departamento;

	function __construct(
		string $genero,
		string $nombre = '',
		int $edad = -1,
		float $peso = 0.0,
		float $estatura = 0.0,
		string $numEmpleado,
		string $departamento
	)
	{
		parent::__construct($genero, $nombre, $edad, $peso, $estatura);
		$this->numEmpleado = $numEmpleado;
		$this->departamento = $departamento;
	}


	public function setNumEmpleado($numEmpleado)
	{
		$this->numEmpleado = $numEmpleado;
	}


	public function getNumEmpleado()
	{
		return $numEmpleado;
	}


	public function setDepartamento($departamento)
	{
		$this->departamento = $departamento;
	}


	public function getDepartamento()
	{
		return $departamento;
	}


	public function __toString()
	{
		return
			parent::__toString() .
			"Numero de Empleado: {$this->numEmpleado}\n" .
			"Departamento: {$this->departamento}\n";
	}
}

echo "<pre>\nHeredando\n";
$empleado = new Empleado('M', 'Goku', 25, 70, 1.72, 'AF917DG', 'Infra');
echo($empleado);
echo "</pre>";

// Interfaces
interface Serializador {
	public function json();

	public function xml();

	public function texto();
}

// instanceof, interfaces en acción y creación de objetos dinámicamente
echo "<pre>\nImplementando interfaces\n";
echo "Serializado a JSON: " . (new Persona('M', 'Goku', 25, 70, 1.72))->json() . "\n";
echo "Serializado a XML: " . (new Persona('M', 'Goku', 25, 70, 1.72))->xml() . "\n";
echo "Serializado a Texto: " . (new Persona('M', 'Goku', 25, 70, 1.72))->texto() . "\n";

echo '$empleado instanceof Persona = ' . (string) ($empleado instanceof Persona) . "\n";
echo '$empleado instanceof Empleado = ' . (string) ($empleado instanceof Empleado) . "\n";
echo '$empleado instanceof Serializador = ' . (string) ($empleado instanceof Serializador) . "\n";
echo '$empleado instanceof Object = ' . (string) ($empleado instanceof Object) . "\n";

echo "</pre>";

// Clases anónimas
$claseAnomina = new class implements Serializador {
	protected $atributo;

	public function mensaje($argument)
	{
		return "Mensaje anónimo! {$argument}";
	}

	public function json()
	{
		return json_encode(get_object_vars($this));
	}

	public function xml()
	{
		return 'convertido a XML';
	}

	public function texto()
	{
		return 'convertido a Texto';
	}

	public function setAtributo($atributo)
	{
		$this->atributo = $atributo;

		return $this;
	}
};

echo "<pre>\nClases anónimas\n";
var_dump($claseAnomina->setAtributo('prueba')->json());
echo "</pre>";