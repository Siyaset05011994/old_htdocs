<?php

$a='';


if (empty($a)) {
	echo 0;
}else{
	echo 1;
}

echo "<br>";

if (isset($a)) {
	echo 1;
}else{
	echo 0;
}

echo "<br>";

// unset


$b='salam';

echo $b;

unset($b);

echo $b; //teyin edilmeyen deyiwen xetasi verecek , cunki deyiwenin ozunu silir .

