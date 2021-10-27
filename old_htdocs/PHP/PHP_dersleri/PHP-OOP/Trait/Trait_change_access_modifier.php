<?php

namespace My_Trait;

trait Test{
    public function salam(){
        echo 'salam';
    }
}

class Test2{
    use Test{
        salam as protected; // protected yerine private yazsaydiq Test3 sinifindeki kod xeta verecekdi , cunki private'ler yanliz sinif icinde iwleyir
    }

    public function __construct()
    {
        return $this->salam();
    }
}

class Test3 extends \My_Trait\Test2 {
    public function __construct()
    {
        return $this->salam();
    }
}

$class=new Test3;

