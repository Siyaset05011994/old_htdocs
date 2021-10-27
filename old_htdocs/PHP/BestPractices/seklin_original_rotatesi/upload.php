<?php



// $file_tmp=$_FILES['file']['tmp_name'];
// $headers = exif_read_data($file_tmp);
// var_dump($headers);



$file_path="uploads/1.jpg";


// // $exif = exif_read_data($fileandpath, "FILE,COMPUTED,ANY_TAG,IFD0,THUMBNAIL,COMMENT,EXIF", true);

// $fp = fopen($fileandpath, 'rb');
  
// // Read the exif headers
$headers = exif_read_data($file_path);
  
var_dump($headers);


   
// // Load image file 
// $image = imagecreatefromjpeg($fileandpath);  
  
// // Use imagerotate() function to rotate the image
// $img = imagerotate($image, 270, 0);
  
// // Output image in the browser 
// header("Content-type: image/jpeg"); 
  
// imagejpeg($img,'thumbs/yeni.jpeg'); 