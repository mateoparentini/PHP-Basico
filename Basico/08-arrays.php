<?php include 'includes/header.php';

//Arrgelos indexados

//Primera forma de hacerlo
$carrito = ["Banana","Tablet","PS5"];
echo "<pre>"; //Para que se vea mejor el var dump
var_dump($carrito);
echo "<pre/>";

//Acceder un valor en el array
echo $carrito[1];

//Agregar un elemento
$carrito[3] = "Chori";

//Añadir un elemento al final
array_push($carrito,"Celu");

//Añadir un elemento al inicio
array_unshift($carrito,"Auto");




echo "<pre>"; //Para que se vea mejor el var dump
var_dump($carrito);
echo "<pre/>";


//Otra forma
// $carrito = array();
include 'includes/footer.php';