<?php
    require_once 'config/config.php';
    require_once 'model/DAO/ActividadDAO.php';
    require_once 'model/DTO/ActividadDTO.php';
    class ActividadController{
        private $ActividadDAO;
        public function __construct(){
            $this->ActividadDAO = new ActividadDAO();
        }
        public function buscar(){
            $criterio = isset($_REQUEST['b']) ? $_REQUEST['b'] : ' ';
            $resultados = $this->ActividadDAO->consultar($criterio);
            require_once HEADER;
            require_once 'view/actividad/actividadView.php';
            require_once FOOTER;
        }
        public function consultar(){
            $resultados = $this->ActividadDAO->consultar('');
            require_once HEADER;
            require_once 'view/actividad/actividadView.php';
            require_once FOOTER;
        }
        public function mostrar() {
            //lectura de parametros (Get o Post)
            $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
    
            //llamar a funciones del modelo
           // $tipoActDAO = new TipoActividadDAO();
           // $tipos = $tipoActDAO->consultar();
    
            if (!empty($id)) {
                $actividad = $this->ActividadDAO->consultarPorId($id);
            }
            // incluir las vistas necesarias
            require_once HEADER;
            require_once 'view/actividad/actividadEditarView.php';
            require_once FOOTER;
        }
        public function guardar(){
            $Actividad = new ActividadDTO();
            $Actividad->setAct_nombre($_REQUEST['Act_nombre']);
            $numer_filas= 0;
            if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
                $Actividad->setAct_idActividad($_REQUEST['id']);
                $numer_filas = $this->ActividadDAO->editar($Actividad);
            }
            else{
                $numer_filas= $this->ActividadDAO->insertar($Actividad);
            }
            $this->buscar();
            
        }
        public function eliminar(){
            $numer_filas = 0;
            if(isset($_REQUEST['id'])&&!empty($_REQUEST['id'])){
                $numer_filas = $this->ActividadDAO->eliminar($_REQUEST['id']);
            }
            $this->buscar();
        }
    }

?>