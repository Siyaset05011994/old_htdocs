<?php


namespace App\Controllers;
use Database\DB;

include "../../vendor/Database/DB.php";

class PostController{
    public function __construct()
    {
        return DB::query("SELECT * FROM posts");
    }
}

$post=new PostController;
print_r($post);
