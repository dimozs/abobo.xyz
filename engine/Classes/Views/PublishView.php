<?php

namespace Classes\Views;

class PublishView implements IView
{
    protected $_param;

    public function __construct($_params,$type='html'){
        $this->_param=$_params;
    }

    public function view(){
        $img_path='/images/';
        $str='
<div>
    <img src="'.$img_path.$this->_param['photo'].'">
    <div>'.$this->_param['descr'].'</div>
</div>';

        return <<<html
<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title>Publish</title>
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
</head>
<body>
	<div class="knopka">
		<a href="/">На главную</a>
	</div>
	<h1>Publish</h1>
	$str
</body>
</html>
html;
    }
}