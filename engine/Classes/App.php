<?php

require_once "Controllers/DefaultController.php";
require_once "Controllers/GoodController.php";

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

        if($params[0]==='good'){
            array_shift($params);
            $controller=new GoodController($params);
        }else
            $controller=new DefaultController($params);

        return $controller;
    }

    public function run(){

        $controller=$this->createController($_SERVER['REQUEST_URI']);

        echo 'TEST -> '.$controller->render();
    }

}