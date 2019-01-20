<?php

namespace Classes\Controllers;

use Classes\Views\DefaultView;

class DefaultController implements IController
{
    protected $_params;

    public function __construct($params){
        $this->_params=$params;
    }

    public function render(){
        $view=new DefaultView($this->_params);
        return $view->view();
    }
}