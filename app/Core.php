<?php

require_once ("app/controller/PlanoController.php");
require_once ("app/model/Plano.php");
require_once ("app/model/Regiao.php");
require_once ("config/Connection.php");

class Core {
    public function start($url){
        $controller = "PlanoController";
        $action = "index";

        if(isset($url['class'])){
            $controller = ucfirst($url['class'].controller);
        }
        if(isset($url['action'])){
            $action = $url['action'];
        }

        call_user_func_array(array(new $controller, $action), array());

    }


}