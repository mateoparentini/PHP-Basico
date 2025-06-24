<?php 
declare(strict_types=1); //Si se pone un string en un int salta error
include 'includes/header.php';

// Definir una clase

class Producto{
    // public $nombre; //Se los saca x el public de abajo
    // public $precio;
    // public $disponible;

    public function __construct(public string $nombre,public int $precio , public bool $disponible)
    {
        // $this->nombre = $nombre; Tambein se lo saca por el strict
        // $this->precio = $precio;
        // $this->disponible = $disponible;
    }

    public function mostrarProducto(){
         echo "El producto es " . $this->nombre . " y cuesta " . $this->precio;    
    }

}

$producto = new Producto("Tablet",200,true);
$producto -> mostrarProducto(); //Llamar la funcion
// var_dump($producto->nombre);
// var_dump($producto->precio);
// var_dump($producto->disponible);

// $producto->nombre = "Tablet"; // Se los saca gracias al constructor de arriba
// $producto->precio = 200;
// $producto->disponible = true;

//Sin metodo:

// echo "El producto es " . $producto->nombre . " y cuesta " . $producto->precio;

echo "<pre>";
var_dump($producto);
echo "<pre/>";


$producto2 = new Producto("PC",500,false);
// $producto2->nombre = "PC";
// $producto2->precio = 500;
// $producto2->disponible = false;

$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "<pre/>";


include 'includes/footer.php';