<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado || $admin) {
    echo "Autenticado";
}else {
    echo "No Autenticado";
}

// IF Anidados..
echo "<br/>";

$cliente = [
    "nombre" => "Mateo",
    "saldo" => 0,
    "info" => [
        "tipo"=>"Premium"
    ]
    ];


    if(!empty($cliente)){
      echo "El array cliente NO esta vacio";
        echo "<br/>";

      if($cliente["saldo"] > 0){
        echo "Tienes saldo";
      }else {
        echo "Tas seco";
      }
    };
echo "<br/>";

//Else if

if ($cliente["saldo"] > 0) {
    echo "Tienes saldo";
} else if($cliente["info"]["tipo"] === "Premium") {
    echo "El cliente es premium";
} else{
    echo "No tiene saldo y no es premium";
}


//Switch
echo "<br/>";

$tecnologia = "Js";

switch($tecnologia){
    case "PHP": 
        echo "Aprendiendo";
        break;

        default:
            echo "No conozco";
            break;
}


include 'includes/footer.php';