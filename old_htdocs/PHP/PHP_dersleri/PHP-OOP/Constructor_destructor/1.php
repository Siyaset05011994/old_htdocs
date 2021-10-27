<?php

class Test3{

    public function __construct()
    {
        echo 'salam ';
    }

    public function test(){
        echo 'ey ';
    }

    public function __destruct()
    {
        echo 'dunya';
    }
}

$test=new Test3; // tek bu evvelce consturctoru daha sonra destructoru iwledir ve ekrana salamdunya yazir.

$test->test(); //ekrana salam ey dunya yazir , cunki ardicilliqla evvelce constructor sonra cagrilan funksiya varsa o , yoxdursa destructor iwleyir constructordan sonra