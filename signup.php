<?php
    include 'session.php';
    include "conn.php";
    if($username && $password && $fname){
      header("Location: index.php");
    }
    else{
?>
<?php

$string='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz1234567890';
$string_shuff=str_shuffle($string);
$uindex=substr($string_shuff,0,16);



 ?>

<?php

  if($_POST['submit'])
  {
    $username = strtoupper($_POST['username']);
    $password = $_POST['password'];
    $password1 = $_POST['repass'];
    $fname = ucfirst($_POST['fname']);
    $lname = ucfirst($_POST['lname']);
    $email = strtolower($_POST['email']);
    $captcha_entered = $_POST['captcha'];
    $captcha = $_SESSION['secure'];
    $error="";

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
    if($captcha_entered==$captcha){
      if($password != $password1)
      {
        echo "Passwords do not match.";
        include "signup.php";
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
          $sql = "INSERT INTO `users`(`First_Name`, `Last_Name`, `Admin`, `Password`, `Email`, `Time`, `Date`,`User_Id`) VALUES ('$fname', '$lname', '$username', '$password', '$email', '$time', '$date','$uindex')";
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
    else{
      $error="Invalid Captcha";
    }
}


  }
 ?>
 <?php
 //GENERATING RANDOM 4 CHARACTER FOR CAPTCHA
   $string='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz1234567890';
   $string_shuff=str_shuffle($string);
   $text=substr($string_shuff,0,4);

 //STARTING AND CREATING SESSION
   session_start();
   $_SESSION['secure']=$text;

 ?>


 <html>

 <head>
   <meta name='viewport' content='width=device-width, initial-scale=1.0' />
   <link rel="stylesheet" type="text/css" href="style2.css" />
   <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />
   <link rel="icon" href="shoutbox_logo_invert.png" />
   <title>SignUp</title>
   <script src="jquery.js"></script>
   <script src="script2.js"></script>
 </head>

 <body>
   <div class='innerdiv'>
     <div class="header_container">
       <div class="header left">
         <div id="logoimg"><img src="shoutbox_logo_invert.png"></div>
       </div>
       <div class="header right">
         <a href="login.php"style="text-decoration:none;"><div class="header_login" >
           <h3>Login</h3>
         </div></a>
       </div>

     </div>
     <div class="">
       <div class="body" style="">
         <div class="Upperheader">
         <h1>  Create your SHoutBox Accoutnt</h1>
         </div>
         <div class="bodymaincontainer">
           <div class="bodymainleft bodymain">
             All you need one account to get access from any device<br>
             <span class="bodymain_text">Chat with friends with the experience never before</span>
             <div class="shoutboximg_container">
               <div class="shoutboximg">
                 <img src="shoutbox_logo_la.png" style="width:100%">
               </div>
               <div class="shoutboximg">
                 <img src="shoutbox_logo_la_invert.png" style="width:100%">
               </div>
             </div>
             <br><br><br><br><br><br><br>
             <span class="bodymain_text" style="font-size:19px;">Chat with anyone straight from SHoutBox android app</span><br>
             <span class="bodymain_text" style="position: relative;top: -12px;font-size:14px;">Chat with friends in group and alot more comming soon....</span>
            <div style="width:100%;height:100px;">
              <div class="" style="float:left; width:30%;height:100%;"></div>

             <div class="shoutboximg" style="width:40%; float:left;padding:0px;margin:0px;border-bottom-right-radius:0px; ">
               <img src="android1.jpg" style="width:100%">
             </div>
             <div class="" style="float:left; width:30%;height:100%;"></div>

           </div>
           </div>
           <div class="bodymainright bodymain">
             <form onsubmit='return checkForm()' action='signup.php' method='post' id='myForm'>

               <table style="width:80%;">

                   <tr><td>
                     <lable class='la'>Name :
                     </lable>
                   </td></tr>
                   <tr><td>
                     <input class='in name' type='text' name='fname' id='fname1' onkeyup='validate(this.name, this.value)' placeholder="First" value='<?php echo $fname;?>'>
                     <input class='in name' type='text' name='lname' id='lname1' onkeyup='validate(this.name, this.value)' placeholder="Last" value='<?php echo $lname;?>'>
                   </td></tr>
                   <tr><td>
                     <div class='error' id='fname'></div>
                   </td></tr>







                   <tr><td>
                     <lable class='la'>Admission No. :
                     </lable>
                   </td></tr>
                   <tr><td><input class='in' type='text' name='username' id='username1' onkeyup='validate(this.name, this.value)'></td></tr>
                   <tr><td>
                     <div class='error' id='username'></div>
                   </td></tr>


                   <tr><td>
                     <lable class='la'>Password :
                     </lable>
                   </td></tr>
                   <tr><td><input class='in' type='password' name='password' id='password1' onkeyup='validate(this.name, this.value); validatepp(this.name, this.value);'></td></tr>
                   <tr><td>
                     <div class='error' id='password'></div>
                   </td></tr>


                   <tr><td>
                     <lable class='la'>Retype-Password :
                     </lable>
                   </td></tr>
                   <tr><td><input class='in' type='password' name='repass' id='repass1' onkeyup='validatepp(this.name, this.value)'></td></tr>
                   <tr><td>
                     <div class='error' id='repass'></div>
                   </td></tr>


                   <tr><td>
                     <lable class='la'>Email :
                     </lable>
                   </td></tr>
                   <tr><td><input class='in' type='text' name='email' id='email1' onkeyup='validate(this.name, this.value)' placeholder="example@domain.com" value='<?php echo $email;?>'></td></tr>
                   <tr><td>
                     <div class='error' id='email'></div>
                   </td></tr>

                   <tr><td>
                     <lable class='la'>Captcha :
                     </lable>
                   </td></tr>
                   <tr><td><div style="float: left ; height : 60px; width:60%; min-width: 170px;" id="divcaptcha"><img src="Captcha.php"></div><div style="float: left ; height : 60px; width:30px; font-size: 24px; color: grey; line-height:60;" onclick="newcaptcha()"><i class="fa fa-refresh" aria-hidden="true"></i></div><lable class='la'>New Captcha</lable><input class='in' type='text' name='captcha' id='captcha1'  ></td></tr>
                   <tr><td>
                     <div class='error' id='captcha'><?php echo $error?></div>
                   </td></tr>

                   <td colspan=3 rowspan='2' align='center'><input type='submit' name='submit' value='Sign Up'></td></tr>

               </table>


             </form>

           </div>
         </div>
       </div>
       <div class="footer">
         <span class="bodymain_text">Accidental Engineer : Move To Next Generation</span>

       </div>
     </div>
   </div>
 </body>

 </html>
<?php }?>
