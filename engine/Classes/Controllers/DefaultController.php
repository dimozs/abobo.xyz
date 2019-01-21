<?php

namespace Classes\Controllers;

use Classes\Models\DefaultModel;
use Classes\Views\DefaultView;

class DefaultController implements IController
{
    protected $_params;

    public function __construct($params){
        $this->_params=$params;
    }

    public function render(){
        $model=new DefaultModel($this->_params);

        if($err=$model->load())throw new \Exception($err);

        $view=new DefaultView($model->getData());
        return $view->view();
    }
}