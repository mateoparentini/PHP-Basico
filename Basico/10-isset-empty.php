<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array("Mateo","Luis","Pedro");
$cliente = [
    "nombre" => "Mateo",
    "sueldo" => 211,
];

// Empty(ve si un arrayy esta vacio o no)

var_dump(empty($clientes)); //true
var_dump(empty($clientes2)); //true
var_dump(empty($clientes3)); //false

//Isset- Recisa si un array esta creado o una propiedad esa definida
echo "<br/>";

var_dump(isset($clientes4)); //False
var_dump(isset($clientes)); //True
var_dump(isset($clientes2)); //True
var_dump(isset($clientes3)); //True


// Isset- Permite revisar si una propiedad de un arreglo asociativo existe
var_dump( isset($cliente["nombre"])); //True
var_dump( isset($cliente["id"])); //False
 
include 'includes/footer.php';