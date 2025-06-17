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

echo "<pre>"; //Para que se vea mejor el var dump
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); // Lo convierte a String, y la constante sirve para los acentos

$json_array = json_decode($json); //Lo convierte a arreglo

var_dump($json); //Resultado de converir arrgelo a string
var_dump($json_array); //Para que mueste el string converido en array
echo "<pre/>";


include 'includes/footer.php';