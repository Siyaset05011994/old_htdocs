<?php

class Static_test{
    public $a;
    public static $b;

    public function __construct()
    {
        $this->a='salam';
        self::$b='dunya';
    }

    public function a(){
      echo 'hahaah';
    }

    public static function b(){
       return self::a();
    }
}

Static_test::b();
