<?php

namespace Is_Callable;

class Test{
    public function test(){

    }

    protected function test2(){

    }
}

$object=new Test;

$a=[$object,'test'];
$b=[$object,'test2'];

var_dump(is_callable($a)); // class istifadesi . var + cagrila bilen metoddur . bool(true) qaytaracaq
echo '<br>';
var_dump(is_callable($b)); // var , amma elcatan deyil deye bool(false) qaytaracaq
echo '<br>';
var_dump(is_callable($a,false,$callable_name)); // bool(true)
echo '<br>';
echo $callable_name; // Is_Callable\ClassIstifadesi::test qaytaracaq