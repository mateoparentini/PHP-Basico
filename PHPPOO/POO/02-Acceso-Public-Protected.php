<?php 
declare(strict_types=1); //Si se pone un string en un int salta error
include 'includes/header.php';

// Definir una clase

class Producto{
    
    // Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    // Protected - Se puede acceder / modificar unicamente en la clase
    // Private- solo miembros de la misma clase pueden acceder a el 

    public function __construct(protected string $nombre,public int $precio , public bool $disponible)
    {
       
    }

    public function mostrarProducto(){
         echo "El producto es " . $this->nombre . " y cuesta " . $this->precio;    
    }

    //Usar un protected

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

}

$producto = new Producto("Tablet",200,true);
// $producto -> mostrarProducto(); //Llamar la funcion
echo $producto->getNombre();
echo $producto->setNombre("Luz");


 echo "<pre>";
 var_dump($producto);
 echo "<pre/>";


$producto2 = new Producto("PC",500,false);

// $producto2->mostrarProducto();

echo $producto2->getNombre();

// echo "<pre>";
// var_dump($producto2);
// echo "<pre/>";


include 'includes/footer.php';