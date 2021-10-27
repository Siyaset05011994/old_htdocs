<?php

$a=['','bir','iki'];

$b=array_filter($a); // icine yazilmir arrayin ancaq dolu olanlarini qaytarir

print_r($b);

echo '<br><br>';

$c=array_filter($a,function ($item){
    if ($item==='bir'){ // valuesu yazdigima beraber olani yeni arraya cevirib qaytarir
        return $item;
    }
});

print_r($c);