<?php

$images_path='uploads/announces/2020/6/128/gunluk_evler_5ed7c60e965d21050809746.jpg,uploads/announces/2020/6/128/gunluk_evler_5ed7c60ff08621619754795.jpeg,uploads/announces/2020/6/128/gunluk_evler_5ed7c61097db6812511392.jpeg,uploads/announces/2020/6/128/gunluk_evler_5ed7c60f458491978558984.jpeg';
$exp=explode(',',$images_path);

$exp2=explode('/',$exp[0]);
echo $exp2[4];