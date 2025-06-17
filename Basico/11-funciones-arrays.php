<?php include 'includes/header.php';

//in_array - buscar elemento en un array

$carrito = ["Tablet","Celu"];

var_dump(in_array("Tablet",$carrito)); //True
var_dump(in_array("PC",$carrito)); //False

//Ordenar elementos de un array

$numeros = [1,28,3,4,5];
sort($numeros); // de menor a mayor
rsort($numeros); //de mayor a meor

echo "<pre>"; //Para que se vea mejor el var dump
var_dump($numeros);
echo "<pre/>";

//Ordenar arrgelo asociativo

$cliente = [
    "saldo" =>200,
    "tipo" =>"premium",
    "nombre" =>"Luis"
];
asort($cliente); //Ordena x valores, primero numero, despues por orden alfabetico
ksort($cliente); //Ordena por llaves, por orden alfabetico
krsort($cliente); //Ordena por llaves, por orden alfabetico inverso(de la z a la a)
arsort($cliente); //Ordena por valores (Z primero, despues numeros)

echo "<pre>"; //Para que se vea mejor el var dump
var_dump($cliente);
echo "<pre/>";


include 'includes/footer.php';