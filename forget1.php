 <?php
     include "conn.php";
     $password = ($_POST['password']);
     $repassword = $_POST['repass'];
     $id=$_POST['id'];
     //echo $id;
     date_default_timezone_set('Asia/Kolkata');
     $time=date('H:i:s a',time());
     $date=date('Y-m-d',time());

     if($password == "" || $repassword == "")
     {
       header("Location: forget.php");
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
           $sql = "UPDATE `users` SET `forget_link`= NULL , `Password`='$password' WHERE `User_Index` ='$id'" ;
           if($connect->query($sql))
           {

               echo "<script>alert('Your Password successfully Changed!');</script>";
               include "login.php";
               exit();

           }
           else
           {
             echo "Unexpected error";
           }
         }
         $connect->close();

     }
  ?>
