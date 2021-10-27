<?php

$a=function(){
	return 1;
};

// var_dump($a);

$b=function($param,$param2){
   return $param.' '.$param2;
};

echo $b('Salam','Dunya');



/*
adsiz funksiyalar da deyirler .
Normal funksiyadan ferqleri :
    -adi yoxdur , deyiwene menimsedilib istifade olunur ;
    -fiqur moterizenin bitiwinde ; qoyulmalidir (Sebebi onu deyiwene menimsetmeyimizdir , onu bir deyer kimi gorur) ;
*/