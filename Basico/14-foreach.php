<?php include 'includes/header.php';

$productos =[
    [
        "nombre"=>"Tablet",
        "precio"=>200,
        "disponible"=>true
    ],
     [
        "nombre"=>"Celular",
        "precio"=>400,
        "disponible"=>true
    ],
     [
        "nombre"=>"TV",
        "precio"=>700,
        "disponible"=>false
    ],
];

foreach( $productos as $producto){//Cerramos el php de arriba ?> 
   
    <li>
        <p>Producto: <?php echo $producto["nombre"]; ?> </p>
        <p>Precio: <?php echo "$" . $producto["precio"]; ?> </p>
        <p><?php echo ($producto["disponible"]) ? "Disponible" : "NO Disponible"; ?> </p> <!-- Operador TERNARIO "?" para primera condicion y ":" si no se cumple la primera condicion -->

            <?php 
            if($producto["disponible"]){
                echo "<p>Disponible<p/>";
            }else {
                echo "<p> NO Disponible<p/>";

            }
            
            ?>

    </li>
   <?php

    echo "<pre>";
    var_dump($producto);
     echo "<pre/>";
}

include 'includes/footer.php';