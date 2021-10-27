<?php

$array=[1,3,9,2,100,-3,33,20,0,4];


function getMin($array){

   $count_array=count($array);
   $min=0;
   
   for ($i=0; $i <$count_array ; $i++) { 
   	  
       if ($array[$i]<$min) {
       	  $min=$array[$i];
       }

   }

   return $min;

}


function getMax($array){

   $count_array=count($array);
   $max=0;
   
   for ($i=0; $i <$count_array ; $i++) { 
   	  
       if ($array[$i]>$max) {
       	  $max=$array[$i];
       }

   }

   return $max;

}

function getMinMaxBetweenAllNumeral($min,$max){
     
   $new_array=[];

   for ($i=$min; $i < $max; $i++) { 
   	   array_push($new_array,$i);
   }

   return $new_array;

}


print_r(getMinMaxBetweenAllNumeral(getMin($array),getMax($array)));


