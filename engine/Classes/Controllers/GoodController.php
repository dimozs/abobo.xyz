<?php

namespace Classes\Controllers;

use Classes\Views\GoodView;

class GoodController implements IController
{
    protected $_params;

    public function __construct($params){
        $this->_params=$params;
    }

    public function render(){
        $view=new GoodView($this->_params);
        return $view->view();
    }
}