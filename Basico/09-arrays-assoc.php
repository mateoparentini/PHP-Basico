<?php include 'includes/header.php';

$cliente = [
    "nombre" => "Juan",
    "saldo"=> 200,
    "info" => [
        "tipo"=> "premium"
    ],
];
echo "<pre>"; //Para que se vea mejor el var dump
// var_dump($cliente["nombre"]); //Para acceder a un valor en el array
var_dump($cliente);
echo "<pre/>";

//Mostrar valores
// echo $cliente["nombre"]; 
// echo $cliente["saldo"]; 
// echo $cliente["info"]["tipo"]; //Primero se accede a info y dsp a tipo 


//Agregar propiedad en el arreglo

$cliente["codigo"] = 120;

echo "<pre>"; //Para que se vea mejor el var dump
var_dump($cliente);
echo "<pre/>";

include 'includes/footer.php';