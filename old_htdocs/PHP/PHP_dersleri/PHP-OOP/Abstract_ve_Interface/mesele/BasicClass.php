<?php

namespace Abstract_ve_Interface\Mesele;

include "TestAbstract.php";
include "TestInterface.php";

class BasicClass extends TestAbstract implements TestInterface {

    protected function test_ab()
    {
        // TODO: Implement test_ab() method.
    }

    public function test_in($a)
    {
        // TODO: Implement test_in() method.
        echo $a;
    }
}

$basic=new BasicClass;
echo $basic->test_in('salam');