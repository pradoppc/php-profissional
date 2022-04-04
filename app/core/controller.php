<?php
    function controller ($matchedUri, $params){
        [$controller, $method] = explode('@', array_values($matchedUri)[0]);
        $controllerWithNameSpace = CONTROLLER_PATH.$controller;
        if (!class_exists($controllerWithNameSpace)){
            throw new Exception("Controller {$controller} não existe");
        }

        $controllerInstance = new $controllerWithNameSpace;

        if(!method_exists($controllerInstance, $method)){
            throw new Exception("O método {$method} não existe no controller {$controller}");
        }

        return $controllerInstance->$method($params);
    }
?>
