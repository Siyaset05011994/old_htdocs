<?php

$array=[1,2,3,4];

$new_array=array_map(function($array_item){
    return $array_item*$array_item;
}, $array);

print_r($new_array);
