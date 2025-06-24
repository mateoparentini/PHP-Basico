<?php include 'includes/header.php';

//Conectar a la BD con MySQLi

$db = new mysqli("localhost", "root" , "admin", "bienesraices_crud");
var_dump($db);

$query = "SELECT titulo, imagen from propiedades";
$stmt = $db->prepare($query); //Prepara a llamar una sentencia sql

$stmt->execute();

$stmt->bind_result($titulo, $imagen); //Se crea variable en funcion a la misma porpiedad que se usa en la sentencia sql

// $stmt->fetch(); // Trae el valor de titulo para imprimiro en la bd(Asignamos resultado)
// var_dump($titulo);

//Imprimir resultado

while($stmt->fetch()):
    var_dump($titulo);
endwhile;

include 'includes/footer.php';