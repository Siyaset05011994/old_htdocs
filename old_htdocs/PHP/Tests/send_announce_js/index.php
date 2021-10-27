<?php

if ($_POST){

    $message=[];

    if (empty($_POST['number'])){
       $message['number']='numberEmpty';
    }

    if (empty($_POST['address'])){
        $message['address']='addressEmpty';
    }

    if (empty($_POST['price'])){
        $message['price']='priceEmpty';
    }

    if (count($message)!=0){
        echo json_encode($message,true);
    }else{
        echo 'success';
    }

}else{
    echo 'no post';
}