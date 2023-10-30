<?php
session_start();
require "app/class/autoload.php";
$app = new ClassGeneral;
require "config.php";

$rutas = [];

if(isset($_GET['pagina'])){
    $rutas = explode("/", $_GET['pagina']);
    // Validamos si el fichero existe o no 
    $fichero = "public/view/".$rutas[0].'.php';

    if (file_exists($fichero)) {
        // Trabajando con views
        if($rutas[0]){
           require "public/view/".$rutas[0].".php";
        }
    }else {
        // por defecto inicio.php
        require "public/view/inicio.php";
    }
    // si no envia nada por defecto en inicio 
}else{
    require "public/view/inicio.php";
}

// Include analytic google
//require "public/view/google.php";
?>
