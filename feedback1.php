<?php
    include 'session.php';
    include "conn.php";
 ?>
<?php

  if($_POST['submit'])
  {
    $sub = ($_POST['sub']);
    $feedback = $_POST['feed'];

    date_default_timezone_set('Asia/Kolkata');
    $time=date('H:i:s a',time());
    $date=date('Y-m-d',time());

    if($sub == "" || $feedback == "")
    {
      header("Location: feedback.php");
      exit();
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
          $sql = "INSERT INTO `feedback`(`name`, `email`,`sub`, `feedback`,`date`, `time`) VALUES ('$fname', '$email','$sub', '$feedback', '$date', '$time')";
          if($connect->query($sql))
          {
            $subject="FeedBack recived";
            $body="Thank you for your valuable feedback. We will try our best to get to your feedback.
            \nFor any query or help write us to engineeraccidental@gmail.com.
            \n\nThank You\nTeam AE " ;
            $header='From: engineeraccidental@gmail.com';
            if(@mail($email,$subject,$body,$header)){
              echo "thank you";
            }
            else{
              echo "Faild";
            }

              echo "<script>alert('Your feedback successfully submitted!');</script>";
              header("Location: index.php");
              exit();

          }
          else
          {
            echo "Filed to submit your feedback";
          }
        }
        $connect->close();

    }


  }
 ?>
