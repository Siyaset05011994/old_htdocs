<?php

$pattern= "/^[a-z]+[a-z0-9\-_.]+[a-z0-9]+@[a-z]+[a-z0-9\-]?[a-z0-9]+\.[a-z]{2,}$/"; //
$email = 'sd_lakc@n-j.com';

if(preg_match($pattern, $email))
{
    echo '1';
}
else
{
    echo '0';
}


//@ iwaresine qeder hissesi  "/^[a-z]+[A-z0-9\-_.]+[a-z0-9]+"