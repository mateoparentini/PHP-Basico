<?php include 'includes/header.php';


//Para que sea solo heredada y no instanciada
abstract class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
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
     public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " y tiene una capacidad de " . $this->capacidad . " personas ";
    }

}
class Auto extends Transporte{
 public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision) 
    {
        
    }
    public function getTransmision() : string {
        return $this->transmision;
    }
}



echo "<hr>";
$bici = new Bicicleta(2,1);
echo $bici->getInfo();
echo $bici->getRuedas();
echo "<hr>";

$auto = new Auto(4,5,"Manual");
echo $auto->getInfo();
echo $auto->getTransmision();
echo "<hr>";



include 'includes/footer.php';