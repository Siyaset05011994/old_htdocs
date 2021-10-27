<?php

class Ana1{
    public function salam(){
       echo 'salam ';
    }

    public function dunya(){
        echo 'dunya';
    }
}

trait Test__{
   public function __construct(){
       parent::salam(); //child sinifde cagrilib deye parent sozcuyu ile classin parent classina muraciet ede bilir .
       parent::dunya();

       echo ' necesen ?';
   }
}

class Child_ extends Ana1 {
    use Test__;
}

$child=new Child_;

