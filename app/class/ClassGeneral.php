<?php 

class ClassGeneral extends ClassConfig{


     public $db;

     function __construct()
     {
        $config = $this->Conexion();
        try {
            $this->db = new PDO(
                'mysql:host='.$config['host'].';dbname='.$config['nombrebd'],
                $config['usuario'],
                $config['contrasena'],
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            // verifica conexion exitosa para probar credenciales
            //echo"conectado: ";
        } catch (Exception $e) {
            echo "Error de conexión ".$e->getMessage();
        }
     }

     private function Query($sql, $parametros){
        try {
        $sentencia = $this->db->prepare($sql);
        $sentencia->execute($parametros);
        $datos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        // id insert retund llamando id
        $id = $this->db->lastInsertId();
        // respuesta general
        $respuesta = [
             'datos' => $datos,
             'id' => $id
        ];
        return $respuesta;
        } catch (Exception $e) {
	     	echo "Error de conexión ".$e->getMessage();
     	}
    }

    // -------------------------------------------------
    // Metodo de ejemplo
    // -------------------------------------------------

    public function Login($data)
    {
        // llamdo al metodo intercol
        $login = $this->Query(' SENTENCIA SQL AQUI ',[
            ':parametro' => $data['valor']
        ]);
        // retorna un arreglo asi :
        /*
        respuesta = [
             'datos' => $datos,
             'id' => $id
        ];
        */
        return $login;
    }



}

?>