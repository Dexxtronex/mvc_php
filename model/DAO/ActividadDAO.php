<?php
require_once 'model/conexion.php';
require_once 'model/DTO/ActividadDTO.php';
class ActividadDAO{
    private $conexion;
    public function __construct(){
        $this->conexion = Conexion::getConexion();

}
    public function consultar($nombre){
        $sentencia = $this->conexion->prepare("select * from actividad where act_estado = 'H'");
        $arrayParrametr = array();
        $sentencia->execute($arrayParrametr);

        $result = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
    public function insertar(ActividadDTO $act){
        try{
$sentencia = $this->conexion->prepare("insert into actividad (act_nombre) values(?)");
$parametros = array($act->getAct_nombre());
$sentencia->execute($parametros);
return $sentencia->rowCount();

    }catch(Exception $e){
        die($e->getMessage());
    }

    }
    public function editar(ActividadDTO $act){
        try{
            $sentencia = $this->conexion->prepare("update actividad set act_nombre = ? where act_idActividad = ?");
            $parametros = array($act->getAct_nombre(), $act->getAct_idActividad());
            $sentencia->execute($parametros);
            return  $sentencia->rowCount();
        }catch(Exception $e){
            die($e->getMessage());
        }

    }
    public function eliminar($id){
        try{
            $sentencia = $this->conexion->prepare("update actividad set act_estado = 'D' where act_idActividad = ?");
            $parametros = array($id);
            $sentencia->execute($parametros);
            return $sentencia->rowCount();
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function consultarPorId($id) {
        $sentencia = $this->conexion->prepare("select * from actividad where act_idActividad=?");
        $parametros = array($id);
        $sentencia->execute($parametros);
        $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
        if (count($resultados) > 0) {
            return $resultados[0]; 
        } else {
            return $resultados;
        }
    }

}

?>