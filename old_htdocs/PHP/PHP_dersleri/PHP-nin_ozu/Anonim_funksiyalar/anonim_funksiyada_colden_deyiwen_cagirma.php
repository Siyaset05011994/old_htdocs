<?php

$a='Salam';
$b='Dunya';

$string=function(){
   global $a,$b;
   return $a.' '.$b;
};

echo $string();


echo "<br><br>";

//en cox istifade olunan versiyasi use()'dir .

$string2=function($c) use ($a,$b) {
   return $a . ' ' . $b . ' ' . $c;
};

echo $string2('hey');
