<?php include 'includes/header.php';

function usuarioAutenticado(bool $autenticado){ // : string (asi se usaria return "Esta autenticado")
    if($autenticado){
        echo "Esta autenticado";
    }else{
        echo "No esta autenticado";
    }
}

$usuario = usuarioAutenticado(true);

echo $usuario;

include 'includes/footer.php';