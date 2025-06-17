<?php include 'includes/header.php';

$nombre = "Mateo";
$nombre = "Mateo 2";

echo $nombre;

var_dump($nombre);  //Vardomp da mas info que eco

define("constante","este es el valor de la constante"); //No crea una variable crea un identificador
echo constante;

$nombreCliente = "Pedro"; //Las dos formas estan bien, pero la mas usada en PHP es la segunda
$nombre_cliente = "Pedro";


// $_nombre = "Mateo"; Pueden empeza y terminar con _, al contraio de js
// $nombre_ = "Mateo"; 

// $99usuarios = 99; Esta mal esto, no se puede arrancar con numero
// $usuarios99 = 99; Esta opcion si esta bien


include 'includes/footer.php';