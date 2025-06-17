<?php include 'includes/header.php';


$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2); //Mayor que
echo "<br/>";


var_dump($numero1 < $numero2); //Menor que
echo "<br/>";


var_dump($numero1 >= $numero2); //Mayor igual
echo "<br/>";


var_dump($numero1 <= $numero2); //Menor igual
echo "<br/>";


var_dump($numero2 == $numero4); //Es igual, aunque sea string devuelve true si son  
echo "<br/>";


var_dump($numero2 === $numero4); //Es igual, pero mas estricto, aca el string da false
echo "<br/>";

var_dump($numero1 <=> $numero2); //Si el de la izq es menor q el de la derecha da (-1), 0 si es igual y 1 si el de la izq es mayor que la derecha
echo "<br/>";

var_dump($numero2 <=> $numero3); //Si el de la izq es menor q el de la derecha da (-1), 0 si es igual y 1 si el de la izq es mayor que la derecha
echo "<br/>";

var_dump($numero2 <=> $numero1); //Si el de la izq es menor q el de la derecha da (-1), 0 si es igual y 1 si el de la izq es mayor que la derecha
echo "<br/>";

include 'includes/footer.php';