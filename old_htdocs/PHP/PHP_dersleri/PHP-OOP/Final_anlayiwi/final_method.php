<?php

class Test7{
    final public function test(){
        echo 'salam';
    }
}


class Test8 extends Test7{
    public function test(){

    }
}

$test8=new Test8; // bele bir error cixacaq : Cannot override final method Test7::test()
