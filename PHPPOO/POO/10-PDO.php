<?php include 'includes/header.php';

//Usando PDO para conectar a la BD

$db = new PDO("mysql:host=localhost; dbname=bienesraices_crud","root","admin");
$query = "SELECT titulo from propiedades";

//Preparar query 
$stmt = $db->prepare($query);

$stmt->execute();

//Obtener resultados
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); //Para que sea un array asociativo

//Iterar array
foreach($resultado as $propiedad):
    echo $propiedad["titulo"];
endforeach;
// var_dump($resultado);

include 'includes/footer.php';