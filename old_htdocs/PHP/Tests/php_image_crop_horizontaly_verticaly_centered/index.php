<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $tmp_name=$_FILES["file"]["tmp_name"];

    list($width,$height)=getimagesize($tmp_name);

    $thumb_width = 200;
    $thumb_height = 150;


    $original_aspect = $width / $height;
    $thumb_aspect = $thumb_width / $thumb_height;

    if ( $original_aspect >= $thumb_aspect )
    {
        // If image is wider than thumbnail (in aspect ratio sense)
        $new_height = $thumb_height;
        $new_width = $width / ($height / $thumb_height);
    }
    else
    {
        // If the thumbnail is wider than the image
        $new_width = $thumb_width;
        $new_height = $height / ($width / $thumb_width);
    }

      $new_file=imagecreatefromjpeg($tmp_name);

      $thumb = imagecreatetruecolor( $thumb_width, $thumb_height );

// Resize and crop
    imagecopyresampled(
        $thumb,
        $new_file,
        0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
        0 - ($new_height - $thumb_height) / 2, // Center the image vertically
        0,
        0,
        $new_width,
        $new_height,
        $width,
        $height
    );

    imagejpeg($thumb, 'images/yeni'.rand().'.jpg', 80);

}else{
    echo 'no';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br>
    <input type="submit" value="Send">
</form>

</body>
</html>
