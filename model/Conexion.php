<?php
    require_once "config/config.php";

    class Conexion {
private static $conexion = null;
private function __construct(){

}
public static function getConexion(){
    try{
        if(!isset(self::$conexion)){
            self::$conexion= new PDO("mysql:host=" . SERVIDORDB . "; port= ".PUERTO."; dbname = " .NOMBREBD, USUARIO, PASSWORD);

            self::$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            self::$conexion->exec("set character set utf8");
        }
    }catch(Exception $e){
        echo "linea del error".$e->getLine();
        echo "archivo".$e->getLine();
        die("error".$e->getMessage());
    }
    return self::$conexion;
}
}


?>