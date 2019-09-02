<?php
    class FrontController{
        public function __construct(){

        
        }
        public function rutear(){
            $controller = (isset($_REQUEST['c']))? $_REQUEST['c']:'Index';
            $action = (isset($_REQUEST['a']))? $_REQUEST['a']:'consultar';

            $controller = strtolower($controller);
            $controller = ucwords($controller) ."Controller";
            require_once "controller/".$controller.".php";
            $controller = new $controller;
            $controller->$action();
        }
    }


?>