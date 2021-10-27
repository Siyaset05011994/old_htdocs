<?php

include('Connection.php');
set_time_limit(0);


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



function recursive(){

    $database=new Connection();

    $db=$database->openConnection();

    for ($j=0;$j<5000;$j++){

        $insert_news= $db->prepare("INSERT INTO news (title,title2,content) VALUES (?,?,?)");

        $insert_news->execute([generateRandomString(),generateRandomString(),generateRandomString().' '.generateRandomString().' '.generateRandomString()]);

    }

    $database->closeConnection();

}

recursive();


