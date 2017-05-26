<?php
include "session.php";
include "conn.php";

if($connect->connect_error)
{
  echo "Couldn't connect to database.";
}
else
{

  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM `users` WHERE Admin = '$username'";
  $result = $connect->query($sql);
  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        if($row['Password'] == $password)
        {
            $_SESSION['user'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['fname'] = $row['First_Name'];
            $_SESSION['lname'] = $row['Last_Name'];
            $_SESSION['admin'] =$row['Admin'];
            $_SESSION['email'] =$row['Email'];
            $_SESSION['userid'] =$row['User_Id'];
            $_SESSION['propic'] =$row['propic'];

            header("Location: index.php");
            exit();
        }
        else
        {
          include "login.php";
            echo "<script>
            document.getElementById('er').innerHTML= '  Incorrect Admission no.';


            </script>";
        }
    }
} else
{
  include "login.php";
  echo "<script>
  document.getElementById('er').innerHTML= '  Incorrect Admission no. or Password';


  </script>";

}
}
 ?>
