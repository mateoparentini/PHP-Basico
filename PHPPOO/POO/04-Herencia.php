<?php include 'includes/header.php';

class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " y tiene una capacidad de " . $this->capacidad . " personas ";
    }
    public function getRuedas() : int {
        return $this->ruedas;
    }
}


class Bicicleta extends Transporte{
     public function getInfo() : string { //Se usa el mismo nombre, y no da problema por la herencia
        return "El transporte tiene " . $this->ruedas . " y tiene una capacidad de " . $this->capacidad . " personas ";
    }

}
class Auto extends Transporte{
 public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision) //Se le añade un parametro
    {
        
    }
    public function getTransmision() : string {
        return $this->transmision;
    }
}
class Moto extends Transporte{

}

// $bici = new Bicicleta(2,1);
// echo $bici->getInfo();
// echo $bici->getRuedas();
echo "<hr>";

$auto = new Auto(4,5,"Manual");
echo $auto->getInfo();
echo $auto->getTransmision();
echo "<hr>";

// $moto = new Moto(2,2);
// echo $moto->getInfo();
// echo "<hr>";



include 'includes/footer.php';