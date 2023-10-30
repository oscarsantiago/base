<?php
session_start();
require "../../app/class/autoload.php";
$app = new ClassGeneral;
require "../../config.php";

// ----------------------------------
// AQUI EL LLAMADO DEL PROCESADOR
// PARA BRINDAR RESPUESTA AL FRONT 
// MEDIANTE SCRIPT

// EJEMPLO (el procesador de login recibe x parametros que seran enviados al back para una respuesta)
// validacion de datos
if($_POST['pass']){
    $login = $app->Login($data);
    if($login['datos'][0]['nombre']){
       echo 'Login valido y mostrar en front';
    }else{
       echo 'Respuesta negativa de la peticion y mostrar en front';
    }
}else{
    echo 'Respuesta negativa de la peticion y mostrar en front';
}