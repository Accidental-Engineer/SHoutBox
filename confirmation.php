<?php
include 'conn.php';
include 'session.php';
$q1 = "SELECT `email_verify` FROM users WHERE User_Id = '$uid';";
$verify=mysqli_query($conn,$q1);
$verifyrow= mysqli_fetch_assoc($verify);
$e_v=$verifyrow['email_verify'];
if($e_v==1){
  header("Location: index.php");
  exit();
}
else{
if ($_POST['submit']){
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];
  $d = $_POST['d'];
  $e = $_POST['e'];
  $f = $_POST['f'];
  $code_entered= ($a*100000)+($b*10000)+($c*1000)+($d*100)+($e*10)+$f;
  //echo $code_entered;
  if($code_entered==$e_v){
    //echo "Pass";
    $q2="UPDATE `users` SET `email_verify`='1' WHERE `User_Id` ='$uid'";
    $verify=mysqli_query($conn,$q2);
    header("Location: index.php");
    exit();
    }
    else{
      //echo "fail";
    }
}
  else{

$code =rand(100000,999999);
$subject="ShoutBox: Email Verification Code";

$body="Thank you $fname, for creating ShoutBox account. To activate your account please verify your email.\nVefification code:\n$code\nFor any query or help write us. Our email-ID is engineeraccidental@gmail.com.
\n\nThank You\nManagement Team\nAccidental Engineer: ShoutBox" ;
$header='From:ShoutBox <engineeraccidental@gmail.com>';
           if(@mail($email,$subject,$body,$header)){
            //echo "success";
            $q3="UPDATE `users` SET `email_verify`='$code' WHERE `User_Id` ='$uid'";
            $verify=mysqli_query($conn,$q3);
?>
<!DOCTYPE html>
<html style="    width: 100%;height: 100%;">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title></title>
    <script src="jquery.js"></script>
    <script type="text/javascript">
    function changeFocus(v){
      $('.code:eq('+v+')').focus();

    }
    </script>
  </head>
  <body style="height:100%;">
    <div id="conform_body">

      <div id="conform_container">
        <div class="img">
          <img src="mail.png" width="20%" alt="">
        </div>
        <h1>Email Confirmation</h1>
        <div class="text">
          Thank You for creating ShoutBox account. We have sent 6-digit verification code to email <span style="color:#009688;"><?php echo $email; ?></span> to verify your email.
          <br>
          Vrification Code
          <br>
          <form class="" action="confirmation.php" method="post">
            <table style="margin: auto;">
              <tr>
                <td><input type="text" name="a" value="" class="code" maxlength='1' onkeyup="changeFocus(1);"></td>
                <td>-</td>
                <td><input type="text" name="b" value="" class="code" maxlength='1' onkeyup="changeFocus(2);"></td>
                <td>-</td>
                <td><input type="text" name="c" value="" class="code" maxlength='1' onkeyup="changeFocus(3);"></td>
                <td>-</td>
                <td><input type="text" name="d" value="" class="code" maxlength='1' onkeyup="changeFocus(4);"></td>
                <td>-</td>
                <td><input type="text" name="e" value="" class="code" maxlength='1' onkeyup="changeFocus(5);"></td>
                <td>-</td>
                <td><input type="text" name="f" value="" class="code" maxlength='1' onkeyup="changeFocus(6);"></td>

              </tr>
              <tr >
                <td colspan="11"><input type="submit" name="submit" value="Next" style="border:none;background-color:#009688;color:white;font-size: 20px;padding:4px 6px 4px 6px;margin-top:12px;"></td>
              </tr>
            </table>
          </form>
          <hr style="margin-top:60px; margin-bottom:10px;">
         Not recived any email? <span style="color:#009688; ">Resend Email</span>
        </div>

      </div>

    </div>

  </body>
</html>
<?php
}
else{
    echo "Failed";
}
}
}
?>
