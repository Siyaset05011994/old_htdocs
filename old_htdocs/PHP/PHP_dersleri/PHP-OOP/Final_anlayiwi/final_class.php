<?php

class Test4{
    public function test(){
        echo 'salam';
    }
}

final class Test5 extends Test4{
    public function __construct()
    {
        parent::test();
    }
}

$test5=new Test5;

// Bu misalda adi classlar bir birinden inheritance ala bilir . Indi ise final sinifden inheritance almaga caliwaq .

class Test6 extends Test5{

}

//kod iwleyen kimi bele bir sehv cixacaq :  Class Test6 may not inherit from final class (Test5)



