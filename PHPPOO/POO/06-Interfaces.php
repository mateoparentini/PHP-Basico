<?php include 'includes/header.php';

//Interfaces - nos dice q hace una clase y que funciones tiene y que datos retorna pero NO nos dice como lo hace

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

include 'includes/footer.php';