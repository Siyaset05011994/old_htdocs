<?php

if (1==3) :
	echo "=";
elseif(1==2):
	echo "!=";
else:
    echo "blah blah blah";
endif;



echo "<br>";

$b=10;

switch($b):

	case 11:
	  echo 11;
	break;

	case 12:
	  echo 12;
	break;

	default:
	 echo 10;
	break;

endswitch;