<?php 
declare(strict_types=1); 
include 'includes/header.php';



class Producto{
    
    //Variable esttatica
    public $imagen;
    public static $imagenPlaceholder = "imagen.jpg";
  
    public function __construct(protected string $nombre,public int $precio , public bool $disponible,  string $imagen)
    {
       if($imagen){
        self::$imagenPlaceholder = $imagen;
       }
    }

    //Metodo estatico
    public static function obtenerImagenProducto(){
        return self::$imagenPlaceholder;  //El self para llamar a la variable estatica de arriba
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

// echo Producto::obtenerImagenProducto();

$producto = new Producto("Tablet",200,true, "");

echo $producto ->obtenerImagenProducto();

echo $producto->getNombre();
echo $producto->setNombre("Luz");


 echo "<pre>";
 var_dump($producto);
 echo "<pre/>";


$producto2 = new Producto("PC",500,false,"pc.jpg");

echo $producto2->obtenerImagenProducto();
echo $producto2->getNombre();



include 'includes/footer.php';