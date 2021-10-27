<?php

$array=['a','b','c','d'];
$count_items=count($array);
$for_condition=$count_items-1;

for ($i=0; $i <= $for_condition; $i++) { 
	echo $array[$i]."<br>";
}