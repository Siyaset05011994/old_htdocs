<?php

namespace mesele;

class RouteBase{
    public static function get($url,$callback){
        //gelen $callback'in cagrila bilen oldugunu yoxlayiram

        if (is_callable($callback)){ // eger true'dirse , yeni cagrila bilirse
            call_user_func($callback);
        }
    }
}
