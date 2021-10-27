<?php

$i=5;

while ($i < 5) { //birinci yoxlayir , wert uygundursa emeliyyata kecir 
	echo $i++;
}

echo "<br>";

do { //emeliyyati yerine yetirir , sonra werte baxir .
	echo $i;
	$i++;
} while ($i < 5);