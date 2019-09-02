<?php
require_once 'config/config.php';
class IndexController{
    public function __construct(){

    }
    public function consultar(){
        require_once HEADER;
        echo 'hola';
        require_once FOOTER;
    }
    public function estatica(){
        $pagina = $_REQUEST['p'];
        require_once HEADER;
        require_once 'view/estaticas/'.$pagina.".php";
        require_once FOOTER;
    }
}

?>