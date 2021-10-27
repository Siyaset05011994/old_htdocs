<?php

if (!function_exists('redirect')){
    function redirect($view){
        require_once "../../resources/views/".$view.".php";
    }
}

