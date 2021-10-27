<?php

//function create_logo_with_string_backround_transparent(){
//    $image = imagecreatetruecolor(150, 30);
//    $string='gunlukevler.az';
//    $text_color = imagecolorallocate($image, 255, 255, 255);
//    $black_opacity = imagecolorallocate($image, 0,0,0);
//    imagecolortransparent($image, $black_opacity);
//    imagestring($image, 5, 13, 7,  $string, $text_color);
//    header ('Content-Type: image/png');
//    imagepng($image,'watermarks/test.png');
//    imagedestroy($image);
//}

//create_logo_with_string_backround_transparent();



function opacity_bg_on_image(){

    $watermark= imagecreate(150, 32);
    imagecolorallocatealpha($watermark, 0,0,0,90);
    $photo = imagecreatefromjpeg('a.jpg');

    $photoWidth = imagesx($photo);
    $photoHeight = imagesy($photo);

    $watermarkWidth = imagesx($watermark);
    $watermarkHeight = imagesy($watermark);

    imagecopy($photo, $watermark, $photoWidth-150, $photoHeight-32, 0, 0, $watermarkWidth, $watermarkHeight);

    header('Content-type: image/jpeg');
    imagejpeg($photo,'images_with_logo/a.jpg');

    imagedestroy($photo);
}

opacity_bg_on_image();


function write_string_on_image(){

    $font_size = 17;
    $font_file="C:\Windows\Fonts\impact.ttf";
    $image =imagecreatefromjpeg('images_with_logo/a.jpg');
    $string='gunlukevler.az';

    $photoWidth = imagesx($image);
    $photoHeight = imagesy($image);

    $boundingBox = imagettfbbox($font_size, 0, $font_file, $string);
    $string_width = $boundingBox[2] - $boundingBox[0];
    $string_height = $boundingBox[5]-$boundingBox[1];

    $dstX = $photoWidth - 144;

    $dstY = $photoHeight -6;

    $lime = imagecolorallocate($image, 229, 226, 219);
    imagettftext($image, $font_size, 0, $dstX, $dstY, $lime, $font_file, $string);

    header ('Content-Type: image/jpeg');
    imagejpeg($image,'result/test.jpg');
    imagedestroy($image);
}

write_string_on_image();

