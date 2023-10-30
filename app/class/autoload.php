<?php
session_start();
function autoload($class){
    require_once ($class.".php");
}
spl_autoload_register('autoload');
?>