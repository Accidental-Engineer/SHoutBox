<?php
include "conn.php";

if(isset($_POST['submit'])){
  $user=mysqli_real_escape_string($conn,$_POST['user']);
  $message=mysqli_real_escape_string($conn,$_POST['message']);
  date_default_timezone_set('Asia/Kolkata');
  $time=date('H:i:s a',time());

  if(!isset($user) || !isset($message) || $user=="" || $message==""){
     $error='Please fill all fields.';
     header('Location: index.php?error='.urlencode($error));
  }
  else{
    $queryin="insert into shouts(user,message,time)
              values('$user','$message','$time');";

    if(!mysqli_query($conn, $queryin)){
      die ('error1'.mysqli_error($conn));
    }
    else{
      header("Location: index.php");
      exit();
    }
  }
}
 ?>
