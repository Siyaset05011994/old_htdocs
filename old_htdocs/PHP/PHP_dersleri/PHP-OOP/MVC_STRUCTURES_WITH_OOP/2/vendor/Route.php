<?php

namespace Vendor;

class Route{

    public static function view($path,$view_file,$data=null){

        if (file_exists(VIEWS_FOLDER.$view_file.'.php')){
            require VIEWS_FOLDER.$view_file.'.php';
        }else{
            echo 'This file not exists !';
        }

    }

    public static function get($path,$callback){
        $callback=explode('@',$callback);
        $controller_name=$callback[0];
//        $controller_path=APP_URL.'app/controllers/'.$controller_name;
        $method_name=$callback[1];
//        echo $controller_name,' '.$method_name;
        $controller_file=CONTROLLER_FOLDER.$controller_name.'.php';
//        echo $controller_file;
        print_r(call_user_func([new $controller_file,$method_name]));
//        echo APP_FOLDER.'controllers';
    }
}
