<?php include 'session.php' ?>
<?php

  if($_POST['submit'])
  {
    $username = strtoupper($_POST['username']);
    $password = $_POST['password'];
    $password1 = $_POST['repass'];
    $fname = ucfirst($_POST['fname']);
    $lname = ucfirst($_POST['lname']);
    $email = strtolower($_POST['email']);

    date_default_timezone_set('Asia/Kolkata');
    $time=date('H:i:s a',time());
    $date=date('Y-m-d',time());

    if($username == "" || $password == "" || $lname == "" || $fname == "" || $email == "")
    {
      header("Location: signup.php");
      exit();
    }
    else
    {
      if($password != $password1)
      {
        echo "Passwords do not match.";
        include "signup.php";
      }
      else
      {
        $connect = new mysqli('localhost', 'root', '04081995@tarun', 'shoutit');
        if($connect->connect_error)
        {
          echo "Couldn't connect to database.";
        }
        else
        {
          $sql = "INSERT INTO `users`(`First_Name`, `Last_Name`, `Admin`, `Password`, `Email`, `Time`, `Date`) VALUES ('$fname', '$lname', '$username', '$password', '$email', '$time', '$date')";
          if($connect->query($sql))
          {
            $_SESSION['user'] = $username;
              $_SESSION['password'] = $password;
              $_SESSION['fname'] = $fname;

              echo "<script>alert('Ýou have been reistered successfully!');</script>";
              header("Location: index.php");
              exit();

          }
          else
          {
            echo "Couldn't reister!";
          }
        }
        $connect->close();
      }
    }


  }
 ?>
