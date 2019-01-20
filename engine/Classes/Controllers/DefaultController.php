<?php

require_once "IController.php";

class DefaultController implements IController
{
    protected $_params;

    public function __construct($params){
        $this->_params=$params;
    }

    public function render(){
        return "I'm Default Controller with params: ".implode(', ',$this->_params);
    }
}