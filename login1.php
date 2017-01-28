<?php
include "session.php";
$connect = new mysqli('localhost', 'root', '04081995@tarun', 'shoutit');
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
            $_SESSION['admin'] =$row['Admin'];

            header("Location: index.php");
            exit();
        }
        else
        {
          include "login.php";
            echo "<script>
            document.getElementById('er').innerHTML= '  Incorrect Admission no. or Password';


            </script>";
        }
    }
} else
{include "login.php";
  echo "<script>
document.getElementById('er').innerHTML= '  Incorrect Admission no. or Password';


  </script>";

}
}
 ?>
