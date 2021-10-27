<?php

    function opacity_bg_on_image($red,$green,$blue,$alpha,$image){

        $extension=getImageExtension($image);

        if ($extension==='jpeg'||$extension==='jpg'){
            $image = imagecreatefromjpeg($image);
        }elseif($extension==='png'){
            $image = imagecreatefrompng($image);
        }

        $imageWidth = imagesx($image);
        $imageHeight = imagesy($image);

        $string='gunlukevler.az';
        $f_file="C:\Windows\Fonts\impact.ttf";

        $bg_width=111;
        $bg_height=round($bg_width/3);
        $f_size=11;
        $string_width=getStringWidth($f_size,0,$f_file,$string);
        $string_height=getStringHeight($f_size,0,$f_file,$string);
        $string_dstx=$bg_width-($bg_width-$string_width)/2;
        $string_dsty=$string_height+($bg_height-$string_height)/2;

        $watermark= imagecreate($bg_width, $bg_height);

        imagecolorallocatealpha($watermark, $red,$green,$blue,$alpha);

        imagecopy($image, $watermark, $imageWidth-$bg_width, $imageHeight-$bg_height, 0, 0, $bg_width, $bg_height);

        if ($extension==='jpeg'||$extension==='jpg'){
            header("Content-type: image/jpeg");
            imagejpeg($image,'test/result/b.jpg');
        }elseif($extension==='png'){
            header("Content-type: image/png");
            imagepng($image,'test/result/a.png');
        }

        imagedestroy($image);

        write_string_on_image(
            $f_size,
            $f_file,
            $string,
            $string_dstx,
            $string_dsty,
            'test/result/b.jpg',
            229,
            226,
            219
        );
    }


opacity_bg_on_image(0,0,0,90,'test/b.jpg');


    function write_string_on_image($f_size,$f_file,$watermark,$string_dstx,$string_dsty,$image,$red,$green,$blue)
    {
        $extension=getImageExtension($image);

        $old_image_target=$image;

        if ($extension==='jpeg'||$extension==='jpg'){
            $image = imagecreatefromjpeg($image);
        }elseif($extension==='png'){
            $image = imagecreatefrompng($image);
        }

        $imageWidth = imagesx($image);
        $imageHeight = imagesy($image);

        $dstX = $imageWidth - $string_dstx;
        $dstY = $imageHeight - $string_dsty;

        $lime = imagecolorallocate($image, $red, $green, $blue);
        imagettftext($image, $f_size, 0, $dstX, $dstY, $lime, $f_file, $watermark);

        if ($extension==='jpeg'||$extension==='jpg'){
            header("Content-type: image/jpeg");
            imagejpeg($image,$old_image_target);
        }elseif($extension==='png'){
            header("Content-type: image/png");
            imagepng($image,$old_image_target);
        }

        imagedestroy($image);
    }



    function getImageExtension($image) {
        $extension=explode('.',$image);
        $extension=end($extension);
        return $extension;
    }

function getStringHeight($f_size,$angle,$f_file,$string) {
    $boundingBox = imagettfbbox($f_size, $angle, $f_file, $string);
    $string_height = $boundingBox[5]-$boundingBox[1];
    return $string_height;
}

function getStringWidth($f_size,$angle,$f_file,$string) {
    $boundingBox = imagettfbbox($f_size, $angle, $f_file, $string);
    $string_width = $boundingBox[2] - $boundingBox[0];
    return $string_width;
}



