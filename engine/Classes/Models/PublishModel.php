<?php

namespace Classes\Models;

class PublishModel implements IModel
{
    protected $_data;

    public function __construct($_params){
        $this->id=(int)$_params[0];
        if(!$this->id) throw new \Exception('Unexpexted parametr');
    }

    public function load(){
        // Load data from a source
        // Return null/error text

        $this->_data=[
            'id'=>$this->id,
            'photo'=>'test'.$this->id.'.png',
            'descr'=>'The description of '.$this->id.' post.'
        ];
        return null;
//        return 'Data loading error';
    }

    public function getData(){
        return $this->_data;
    }
}