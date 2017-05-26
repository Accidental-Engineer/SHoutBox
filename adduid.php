<?php
include 'conn.php';
$n=8;
  
  while ($n <= 59) {



  $string='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz1234567890';
  $string_shuff=str_shuffle($string);
  $uid=substr($string_shuff,0,16);
  echo $uid."\n";
  $q1="UPDATE `users` SET `User_Id`='$uid' WHERE User_Index=$n;";
  $result=mysqli_query($conn,$q1);
  $n++;
}


   ?>
