<?php 

class ClassConfig{
   
    public function Conexion(){
        try{
            $config = [
                'contrasena' => '',
                'usuario' => '',
                'nombrebd' => '',
                'host' => 'localhost'
            ];
            return $config;
        } catch (Exception $e) {
            echo "Error: ".$e->getMessage();
        }
    }

}


?>