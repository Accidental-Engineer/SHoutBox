<?php
header('content-type: image/jpeg');
$email ='tarun12.tarunkr@gmail.com';
$email_len= strlen($email);

$font_size =4;
$image_height=imagefontheight($font_size);
$image_width= (imagefontwidth($font_size)) * $email_len;

$image = imagecreate($image_width, $image_height);

imagecolorallocate($image, 255 ,255, 255);
$font_color = imagecolorallocate($image, 0 ,0, 0);

imagestring($image, $font_size, 0, 0 , $email, $font_color);
imagejpeg($image);
//echo $image;
?>
