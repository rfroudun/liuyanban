<?php
//加载函数
include "./functions.php";
//实例化类---载入的函数 functions.php里面有 aotuload函数，会自动载入这个类
$h=new home();
//判断有没有get参数，有的话值就是这个get参数，否则值就是 index
$a=isset($_GET["a"])?$_GET["a"]:"index";
//调用方法：方法的名字是$a的值
$h->$a();














