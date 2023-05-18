<?php   

abstract class Conexion {
    public static $conexion = null;

    public static function conectar (){
        try {
            self::$conexion= new PDO ("informix:host=host.docker.internal; service=9088;database=mdn; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix","in4mix");
            echo "conexion exitosa";
        } catch (PDOException $e){
            echo "error de conexion de base de datos";
            echo $e->getMessage();
            exit;
        }

        return self::$conexion;
    }
}
?>