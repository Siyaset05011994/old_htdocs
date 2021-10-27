<?php

$title="";
$description="";
$content="";

if ($_SERVER['REQUEST_METHOD']=='POST'){

    $title=$_POST['title'];
    $description=$_POST['description'];
    $content=$_POST['content'];

    $new_data=[];

    $new_data['title']=$title; // json faylina "title": "title_value" weklinde yazmaq ucun .
    $new_data['description']=$description;
    $new_data['content']=$content;

    $old_data_array_type=json_decode(file_get_contents("../files/articles.json"),true); //true yazmayanda object stdclass edir , true ile array .

    array_push($old_data_array_type,$new_data);

    $new_json_data=json_encode($old_data_array_type);

    file_put_contents('../files/articles.json',$new_json_data);

//    echo 'success';

}else{
    echo 'Not supperted this method !';
}
//$myfile = fopen("../files/articles.json", "w") or die("Unable to open file!"); //yoxdursa yarat , acma icazesi yoxdursa mesaj cixar 'or die(message)'
//$txt = "John Doe\n";
//fwrite($myfile, $txt);
//$txt = "Jane Doe\n";
//fwrite($myfile, $txt);
//fclose($myfile);
