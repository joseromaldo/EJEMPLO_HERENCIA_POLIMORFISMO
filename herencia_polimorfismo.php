<?php
class Transporte{
    protected int  $ruedas;
    protected int $capacidad;

    public function __construct(int $ruedas, int $capacidad)
    {
        $this -> ruedas = $ruedas;
        $this -> capacidad = $capacidad;
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this -> ruedas  . " rudas y una capacidad de " . $this -> capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this -> ruedas;
    }
}

class Bicicleta extends Transporte {

    public function getInfo() : string {
        return "El transporte tiene " . $this -> ruedas - " ruedas y una capacidad de " . $this -> capacidad . "personas y NO GASTA GASOLINA ";
    }
}

class Automovil extends Transporte{

    protected string $transmision;
    public function __constructor(int $ruedas, int $capacidad, string $transmision)
    {
        $this -> ruedas = $ruedas;
        $this -> capacidad = $capacidad;
        $this -> transmision = $transmision;
    }
    public function getTransmision() : string{
        return $this -> transmision;
    }
}

// Instancia del primer objeto 
$bicicleta = new Bicicleta(2, 1);

// Ejecución del método heredado de transporte
echo $bicicleta -> getInfo();
echo $bicicleta -> getRuedas();

echo "<hr>";

// Instancia del segundo objeto, con el atributo adicional
$auto = new Automovil(4, 4, 'Manual');

// Método herdedado de transporte
echo $auto -> getInfo();

// Método de la clase automóvil
echo $auto -> getTransmision();