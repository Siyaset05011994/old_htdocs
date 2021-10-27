<?php

function test(){
    $font_size = 50;
    $font_file="C:\Windows\Fonts\impact.ttf";
    $string = 'gunlukevler.az';
    $image = imagecreatefromjpeg("result/test.jpg");

    $photoWidth = imagesx($image);
    $photoHeight = imagesy($image);

    $boundingBox = imagettfbbox($font_size, 0, $font_file, $string);
    $string_width = $boundingBox[2] - $boundingBox[0];
    $string_height = $boundingBox[5]-$boundingBox[1];

    $dstX = ($photoWidth - $string_width )/2;

    $dstY = ($photoHeight - $string_height)/2;

    $lime = imagecolorallocatealpha($image, 255, 255, 255,101);
    imagettftext($image, $font_size, 0, $dstX, $dstY, $lime, $font_file, $string);
    header("Content-type: image/jpeg");
    imagejpeg($image,"result/test.jpg");
    imagedestroy($image);
}

test();

