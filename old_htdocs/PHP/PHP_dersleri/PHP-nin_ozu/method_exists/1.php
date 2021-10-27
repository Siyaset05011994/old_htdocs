<?php
namespace Method_Exists;

class Test{

    public function test(){

    }

    public static function test2(){
        return 1;
    }
}

$test=new Test;

var_dump(method_exists($test,'test')); // true
//var_dump(method_exists('ClassIstifadesi','test')); // bu nese duzgun iwlemedi

