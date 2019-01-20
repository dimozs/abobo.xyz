<?php

class GoodController implements IController
{
    protected $_params;

    public function __construct($params){
        $this->_params=$params;
    }

    public function render(){
        $c=count($this->_params);
        if($c>0)return "I'm GoodController with params [$c]: ".implode(', ',$this->_params);
        return "I'm GoodController without params...";
    }
}