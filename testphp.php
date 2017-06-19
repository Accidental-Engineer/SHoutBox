<?php
//GENERATING RANDOM 4 CHARACTER FOR CAPTCHA
  $string='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwy1234567890';
  $string_shuff=str_shuffle($string);
  $text=substr($string_shuff,0,4);

//STARTING AND CREATING SESSION
  session_start();
  $_SESSION['secure']=$text;
  echo $text;
?>
<img src="Captcha.php">
