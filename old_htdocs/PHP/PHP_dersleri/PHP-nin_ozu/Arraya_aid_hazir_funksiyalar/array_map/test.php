<?php

$array=[1,2,3];
$b=2;

$new_array=array_map(function ($item) use ($b){
    return $item+1-2;
},$array);

print_r($new_array);