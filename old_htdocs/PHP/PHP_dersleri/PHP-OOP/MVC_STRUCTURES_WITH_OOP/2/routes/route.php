<?php

use Vendor\Route;
//use Vendor\Helper;

$data=[
    [
        'name'=>'Siyaset',
        'surname'=>'Piraliyev',
        'status'=>1
    ],

    [
        'name'=>'Urfan',
        'surname'=>'Ibrahimsoy',
        'status'=>0
    ],
];

//Route::view('/','welcome',$data); //parametrli view
Route::get('/welcome','WelcomeController@index');//controllerde metoda yoneltme
