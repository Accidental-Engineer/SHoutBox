<?php
include "conn.php";
$string='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz1234567890';
$string_shuff=str_shuffle($string);
$link=substr($string_shuff,0,20);
//echo $link;


 ?>
 <?php

   if($_POST['submit'])
   {
     $admin = strtoupper($_POST['admin']);


     date_default_timezone_set('Asia/Kolkata');
     $time=date('H:i:s a',time());
     $date=date('Y-m-d',time());

     if($admin == "" )
     {
       include "forgetpassword.php";
       echo "<script>
       document.getElementById('er').innerHTML= '  Enter Admission no.';


       </script>";
     }
     else
     {

         //$connect = new mysqli('localhost', 'root', '04081995@tarun', 'shoutit');
         if($connect->connect_error)
         {
           echo "Couldn't connect to database.";
         }
         else
         {
           $sql = "SELECT * FROM `users` WHERE Admin = '$admin'";
           $result = $connect->query($sql);
           if ($result->num_rows > 0) {


                 if($row = $result->fetch_assoc())
                 {
                   $sq2 = "UPDATE `users` SET `forget_link`='$link' WHERE `Admin`='$admin'";
                   if($connect->query($sq2))
                   { $name=$row['First_Name'];
                     $email=$row['Email'];
                     $subject="Reset Password";
                     $body="Dear ".$name." You recently requested for your password to be reset for your SHoutBox account and you can do so by clicking on the link :http://myshoutbox.tk/forget.php?reset=".$link."\nIf you did not request a password reset, do not worry. No action is required at your end.\n\nFor any query or help write us to engineeraccidental@gmail.com.
                     \n\nThank You\nTeam AE " ;
                     $header='From: SHoutBox <engineeraccidental@gmail.com>';
                     if(@mail($email,$subject,$body,$header)){
                    //   echo "thank you";
                     }
                     else{
                      // echo "Faild";
                     }


                       include "forgetpassword.php";
                       echo "<script>
                       document.getElementById('er').innerHTML= 'Recovery-Email has been sent to your registered Email Id';


                       </script>";
                       exit();

                   }
                   else
                   {
                     echo "Unexpected Error : Try again latter";
                   }


                 }

             }
             else
             {
                 include "forgetpassword.php";
                 echo "<script>
                 document.getElementById('er').innerHTML= '  Incorrect Admission no.';


                 </script>";
             }
         }


$connect->close();


         }


     }

else{
  echo "failed";
}

  ?>
