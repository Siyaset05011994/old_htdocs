<?php

$b=2;


function b(){
   // return $b; // tanimiyacaq 
	global $b; //funksiyanin icinde istifade etmek ucun , icinde global etmek lazim gelir .
	return $b;
}

echo b();