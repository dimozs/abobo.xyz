<?php

namespace Classes\Views;

class DefaultView
{
    protected $_param;

    public function __construct($_params,$type='html'){
        $this->_param=$_params;
    }

    public function view(){
        $strParam="Default Views with params: ".implode(', ',$this->_param);

        return <<<html
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Abobo</title>
    <link rel="stylesheet" type="text/css" href="/css/style1.css">
</head>
<body>
    <h1>Просто сайт про Абобо</h1>
    <h2>Просто немного про Абобо и его приключениях</h2>
    <div class="knopka">
        <a href="/static/abobo.html">Про Абобо</a>
    </div>
    <h2>$strParam</h2>
</body>
</html>
html;
    }
}