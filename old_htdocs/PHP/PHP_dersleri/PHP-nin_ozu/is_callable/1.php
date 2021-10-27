<?php

function test(){

}

$a='test';//funksiyanin adi.
$b=12;

var_dump(is_callable($a)); // true cixacaq cunki bele bir funksiya var + cagrila bilir .
echo '<br>';
var_dump(is_callable($b,true)); // false cixacaq cunki bele bir funksiya yaxud metod adi ola bilmez .
echo '<br>';
var_dump(is_callable($a,false,$callable_name));
echo $callable_name;
// bool(true) test cunki bele bir funksiya var+cagrila biler ve $callable_name test qaytardi .