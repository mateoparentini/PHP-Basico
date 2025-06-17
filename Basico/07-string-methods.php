<?php include 'includes/header.php';

$nombreCliente = "Mateo";

//Conocer extension de un string
var_dump($nombreCliente);
echo "<br/>";

echo strlen($nombreCliente); //El largo de un string
echo "<br/>";

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
strlen($nombreCliente);
echo "<br/>";
echo strlen($texto);
echo "<br/>";

//Convertirlo a mayusculas
echo strtoupper($nombreCliente);
//Convertirlo a minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@corre.gmail.com";  //Para esto sirve las minusculas en la programacion
$mail2 = "Correo@corre.gmail.com";

echo "<br/>";

var_dump(strtolower($mail1) === strtolower($mail2));

// Cambiar valor de la variable
echo str_replace("Mateo","M",$nombreCliente);
echo "<br/>";

//Revisar si un string existe o no 
echo strpos($nombreCliente,"Mateo");

//Concatenar strings

$tipoCliente = "Premium";
echo "<br/>";
//Una forma de concatenar
echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br/>";
//Otra mas sencilla
echo "El cliente {$nombreCliente} es {$tipoCliente}";
include 'includes/footer.php';