<?php include 'includes/header.php';

//While

$incremento = 0; //Inicializador

while($incremento<5){
    echo $incremento . "<br/>";
    $incremento++;    
};


//Do While
 echo "<br/>";
$incremento = 0;

do{
  echo $incremento . "<br/>";
    $incremento++;
}while($incremento <10);


// For


/*
    3 imprimir Fizz (Multiplos)
    5 imprimir Buzz
    3 y 5 Fizz Buzz
*/
 
echo "<br/>";
for($i = 1; $i<20; $i++){
     if($i % 3 === 0 && $i % 5 === 0){
        echo $i . "Fizz Buzz";
         echo "<br/>";
    }
    if($i % 3 === 0){
        echo $i . "Fizz";
         echo "<br/>";
    } if($i % 5 === 0){
        echo $i . "Buzz";
         echo "<br/>";
    }
     
};

//Con diferente sintaxis   (LOS ELSEIF TIENEN QUE IR PEGADOS(elseif) NO (else if))
// for($i = 1; $i<20; $i++){
//      if($i % 3 === 0 && $i % 5 === 0):
//         echo $i . "Fizz Buzz";
//          echo "<br/>";
//     
//     if($i % 3 === 0):
//         echo $i . "Fizz";
//          echo "<br/>";
//      if($i % 5 === 0):
//         echo $i . "Buzz";
//          echo "<br/>";
//     endif;
//     endfor;
     

//For Each

$clientes = ["Mateo","Juan","Luis"];

foreach($clientes as $cliente){
    echo $cliente . "<br/>";
};

//Lo mismo pero con el bucle for
// for ( $i=0; $i<count($clientes);$i++){ //Count = Lenght(No existe lenght en PHP)
//     echo $clientes[$i] . "<br/>";
// };

$cliente = [
    "nombre"=>"Mateo",
    "saldo"=>200,
    "tipo"=>"Premiun",
];
foreach($cliente as $key => $valor){ //Key es el valor de la izq "Nombre"
    echo $key . " - " . $valor . "<br/>";
};



include 'includes/footer.php';