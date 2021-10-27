<?php

namespace App\Controllers;
use App\Controllers\Controller;

require_once "Controller.php";
require_once "../Helpers/MainHelper.php";

class HomeController extends Controller {
    public function index(){
        echo redirect('index');
    }
}

$home=new HomeController();
return $home->index();