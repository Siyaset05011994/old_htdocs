<?php

//sintaksisi array_map(funksiyaAdi,array)

/*
arrayin her elementini heminin funksiyaya gonderir , funksiyadaki kodlar iwleyenden sonra o elementlerin son hali bir array icinde return edilir 
*/

$array=[1,2,3];
$array2=['a','b','c'];
$array3=['d','b','f'];

function a($array_item){
   return $array_item+=1;
}

function b($array_item){
   return strtoupper($array_item); // herfi boyudur
}

function c($birinci_array_item ,$ikinci_array_item){
   return $birinci_array_item ==$ikinci_array_item ? 'beraberdir' : 'beraber deyil';
}

$result_array=array_map('a', $array);
$result_array2=array_map('b', $array2);
$result_array3=array_map('c', $array2,$array3);

print_r($result_array);
echo "<br>";
print_r($result_array2);
echo "<br><br><br>";
print_r($result_array3);


//coxlu arraylarin deyerleri ustunde de emeliyyat aparmaq olur  

