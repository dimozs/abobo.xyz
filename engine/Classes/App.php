<?php

namespace Classes;

use Classes\Controllers\DefaultController;
use Classes\Controllers\PublishController;
use Classes\Controllers\IController;

class App
{
    protected static $_instance;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance(){
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    protected function createController($request):IController{

        $params=explode('/',$request);
        array_shift($params);

        if($params[0]==='publish'){
            array_shift($params);
            $controller=new PublishController($params);
        }else
            $controller=new DefaultController($params);

        return $controller;
    }

    public function run(){

        $controller=$this->createController($_SERVER['REQUEST_URI']);

        echo $controller->render();
    }

}