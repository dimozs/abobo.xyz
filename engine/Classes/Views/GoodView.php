<?php

namespace Classes\Views;

class GoodView implements IView
{
    protected $_param;

    public function __construct($_params,$type='html'){
        $this->_param=$_params;
    }

    public function view()
    {
        $c=count($this->_param);
        if($c>0)
            $strParam="I'm GoodController with params [$c]: ".implode(', ',$this->_param);
        else
            $strParam="I'm GoodController without params...";

        return $strParam;
    }
}