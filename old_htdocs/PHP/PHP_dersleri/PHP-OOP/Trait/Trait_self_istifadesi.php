<?php

trait Test____{
    public function salam(){
        echo 'salam';
    }
}

trait Test_____{
    use Test____;
    public function __construct()
    {
        return self::salam(); //yanliz icine cagrilmiw diger traitin icine girmek ucun self sozcuyu iwlenir .
    }
}

class Test______{
    use Test_____;
}

$class=new Test______;