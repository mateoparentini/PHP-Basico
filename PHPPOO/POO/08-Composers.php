<?php include 'includes/header.php';

//LLamar al composer
require "vendor/autoload.php";


//Incluir clase de detalle y cliente
// require "Clases/Clientes.php";
// require "Clases/Detalles.php";
use \Firebase\JWT\JWT;
use App\Clientes;
use App\Detalles;

//Autoloads
//Incluir otras clases
function mi_autoload($clase){
    $partes = explode("\\", $clase ); //Tiene dos argumentos uno lo q vamos a buscar y despues en donde
    require  __DIR__ . "/Clases/" . $partes[1] . "php";
}

spl_autoload_register('mi_autoload');

$detalles = new Detalles();
$clientes = new Clientes();


include 'includes/footer.php';