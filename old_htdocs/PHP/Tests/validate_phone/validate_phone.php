<?php

$phone = '(050)771-50-42';

if(preg_match("/\([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2}/", $phone)) {
   echo "valid";
}else{
	echo "invalid";
}