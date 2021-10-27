<?php

$a=[1,2,3];
$b=1;
$c='string';

function check_is_array($param){
	return is_array($param) ? 'is array' : 'not array' ;
}

echo check_is_array($c);