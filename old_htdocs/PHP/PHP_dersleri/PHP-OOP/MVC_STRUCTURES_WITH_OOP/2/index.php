<?php

define('APP_URL',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));//index.php yazisini silirem
define('VIEWS_FOLDER',APP_URL.'views/');
define('CONTROLLER_FOLDER',APP_URL.'controllers/');

//route iwlemesi ucun lazimi fayllar yuklenir.
require APP_URL."vendor/Route.php"; // vendor/Route.php faylini cagirir .
require APP_URL."vendor/Helper.php"; // routes/route.php faylini cagirir .
require APP_URL."app/controllers/WelcomeController.php"; // routes/route.php faylini cagirir .

require APP_URL."routes/route.php"; // routes/route.php faylini cagirir .
