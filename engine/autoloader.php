<?php

spl_autoload_register(function($classname){

    $path=str_replace('\\','/', __DIR__ . '/' .$classname).'.php';

    if(@include $path)return;

//    $array=[
//        "/engine/Classes/",
//        "/engine/Classes/Controllers/",
//        "/engine/Classes/Views/",
//    ];
//    foreach ($array as $value){
//        $path=str_replace('\\','/',__DIR__).'/..'.$value.$classname.'.php';
//        if(@include $path)return;
//    }

});
