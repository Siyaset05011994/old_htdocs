<?php

$a=[
	'php',
	'html',
	'css',
	'js',
];

echo current($a); // default arrayin 2-ci indexini qaytarir . Amma ard-arda arrayi nextin icine salsaq o zaman her defe arrayin bir novbeti indexini qaytarir , paginate mentiqinde istifade olunur six-six .
echo next($a);
echo current($a); // bu zaman current nexte gore ozunu teyin edir . next hazirda 2ci elementdedirse current de onda olur .