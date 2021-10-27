<?php

$a=['a','b','c','d','e'];

echo current($a);
echo "<br>";
echo next($a);
reset($a); // normalda reset etmeseydim novbeti next c olmali idi , amma reset etdim deye bawa qayitdi ve next deyende 2-ci elementi gosterdi
echo "<br>";
echo next($a);
