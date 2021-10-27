<?php

require "vendor/autoload.php";

use GuzzleHttp\Client;

$client= new Client([
   'base_uri'=>"http://httpbin.org"
]);

$response=$client->request('GET')->getBody()->getContents();

return $response;

