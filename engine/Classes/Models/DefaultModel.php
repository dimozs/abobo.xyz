<?php

namespace Classes\Models;

class DefaultModel implements IModel
{
    protected $_param,$_data;

    public function __construct($_params){
        $this->_param = $_params;
    }

    public function load(){
        // Load data from a source
        // Return null/error text
        $this->_data=[
            [
                'id'=>1,
                'photo'=>'test1.png',
                'descr'=>'The description of first post.'
            ],
            [
                'id'=>2,
                'photo'=>'test2.png',
                'descr'=>'The second post description.'
            ],
            [
                'id'=>8,
                'photo'=>'test8.png',
                'descr'=>'The description of post number 8.'
            ],
        ];
        return null;
//        return 'Data loading error';
    }

    public function getData(){
        return $this->_data;
    }
}