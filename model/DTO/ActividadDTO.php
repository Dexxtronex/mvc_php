<?php
    class ActividadDTO{
        private $act_idActividad;
        private $act_nombre;
        public function __construct(){

        }
        public function getAct_idActividad(){
            return $this->act_idActividad;
        }
        public function setAct_idActividad($id){
            $this->act_idActividad = $id;
        }
        public function getAct_nombre(){
            return $this->act_nombre;
        }
        public function setAct_nombre($nombre){
            $this->act_nombre = $nombre;
        }
    }

?>