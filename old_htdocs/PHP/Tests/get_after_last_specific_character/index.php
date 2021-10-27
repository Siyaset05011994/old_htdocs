<?php

$url='http://localhost:8000/gunluk-kiraye-ev-salam-saol--sdklcbjsdck-1-100';
$id = substr($url, strrpos($url, '-') + 1);
echo $id;