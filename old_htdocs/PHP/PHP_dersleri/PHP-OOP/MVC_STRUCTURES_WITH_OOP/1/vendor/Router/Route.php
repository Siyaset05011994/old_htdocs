<?php

namespace Router;

class Route{
   public static function get($path,$controller_and_method){
//        $path=explode('/',$path);
        $explode_controller_method=explode('@',$controller_and_method);
        $controller_name=$explode_controller_method[0];
        $method_name=$explode_controller_method[1];
        echo $controller_name.' '.$method_name;
   }
}

