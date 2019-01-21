<?php

namespace Classes\Controllers;

use Classes\Models\PublishModel;
use Classes\Views\PublishView;

class PublishController implements IController
{
    protected $_params;

    public function __construct($params){
        $this->_params=$params;
    }

    public function render(){
        $model=new PublishModel($this->_params);

        if($err=$model->load())throw new \Exception($err);

        $view=new PublishView($model->getData());
        return $view->view();
    }
}