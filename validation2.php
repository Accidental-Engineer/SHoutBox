<?php
include("conn.php");
$value = $_GET['query'];
$formfield = $_GET['field'];

//Check Valid or Invalid user name when user enters user name in username input field.


//Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password") {
    if (strlen($value) < 6 && strlen($value) > 0) {
        echo "Password too short";
    } else if(strlen($value) == 0){
        echo "";
    }
      else{
        echo "<span>Strong</span>";
    }
}

//Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {

    if (!filter_var($value,FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email";
    } else {
        echo "<span>Valid</span>";
    }
}

//Check Valid or Invalid website address when user enters website address in website input field.
if ($formfield == "username") {
    if (!preg_match("/((16|15)(je00){1}){1}\d{4}$/i", $value)) {
        echo "Invalid Format";
    } else {
      $sql="select admin from users where admin='$value';";
      $us=mysqli_query($conn,$sql);
      if($row= mysqli_fetch_assoc($us)){
        echo "Admission already exists";
      }
      else{

        echo "<span>Valid</span>";}
    }
}
?>
