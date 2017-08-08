<?php
header("Content-type:text/html;charset=utf-8");

function p($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

define("IS_POST",$_SERVER["REQUEST_METHOD"]=="POST" ? true :false);

function __autoload($classname){
    include "./{$classname}.class.php";
}












