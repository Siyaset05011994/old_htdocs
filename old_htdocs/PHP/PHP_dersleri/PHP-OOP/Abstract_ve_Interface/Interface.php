<?php

interface Ana{
    public function test_();
}

interface Test extends Ana {

    const a=1;

    public function test();

}


class Test2 implements Test {

    public function test()
    {
        // TODO: Implement test() method.
        echo 'salam';
    }

    public function test_()
    {
        // TODO: Implement test_() method.
    }
}

$test2=new Test2;
echo $test2->test();
