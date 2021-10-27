<?php

$a=date('Y-m-d H:i',strtotime('2020-07-19 14:00'));
$b=date('Y-m-d H:i',strtotime('2020-07-19 14:01'));

if ($a>$b){
    echo 'ok';
}