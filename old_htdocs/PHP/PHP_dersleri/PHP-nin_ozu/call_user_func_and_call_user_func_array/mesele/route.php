<?php

use mesele\RouteBase;

require_once "RouteBase.php";

RouteBase::get('home',function (){
    echo 'salam';
}); // get metoduna ikinci parametr kimi funckiya gonderilir ve RouteBase is_callable werti true olur deye icindeki
