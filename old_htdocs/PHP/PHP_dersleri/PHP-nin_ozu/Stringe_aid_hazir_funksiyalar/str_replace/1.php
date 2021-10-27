<?php

$a='salam ey dunya';

echo str_replace('salam','sagol',$a); // verilmis sozu axtarir ve verilmis diger sozle deyiwib deyiwilmiw stringi qaytarir

echo '<br>';

echo str_replace(
    ['a','l'],
    ['A','@'],
    $a
);  // bu cur multiple de istifade oluna biler
