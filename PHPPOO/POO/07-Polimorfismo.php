<?php include 'includes/header.php';

interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TransporteInterfaz{
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

class Auto extends Transporte implements TransporteInterfaz {
     public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
        
    }
    public function getInfo() : string {
        return "El transporte AUTO tiene " . $this->ruedas . " y tiene una capacidad de " . $this->capacidad . " personas y su color " . $this->color;
    }
    public function getColor() : string {
        return "El color es " . $this->color;
    }
}

echo "<pre>";

var_dump($trans = new Transporte(8,20));
echo $trans ->getInfo();
echo "<br/>";

var_dump($auto = new Auto(4,4,"Rojo"));
echo $auto->getInfo();
echo "<br/>";
echo $auto->getColor();

echo "<pre/>";

include 'includes/footer.php';