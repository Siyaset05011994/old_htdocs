<?php

namespace Vendor;

class Helper{
    public static function view($view_path,$parameters=null){
        $view_path_explode=explode('.',$view_path);
        return $view_path_explode;
    }
}