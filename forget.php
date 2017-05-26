 <link rel="stylesheet" type="text/css" href="style2.css"/>
 <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css"/>
 <link rel="icon" href="shoutbox_logo_invert.png"/>
 <script src="script2.js"></script>
 <?php
  include "conn.php";
   include "session.php";
   $linkid=$_GET['reset'];
   //echo $linkid;
   //echo $linkid;
   $q1="select * from users WHERE forget_link= '$linkid' ;";
   $shouts=mysqli_query($conn,$q1);
   if(!($username && $password && $fname))
   {
     if($row= mysqli_fetch_assoc($shouts)){
     if($linkid!=""){

    $id=$row['User_Index'];
  $form = "
 <head>
 <meta name='viewport' content='width=device-width, initial-scale=1.0'/></head>
  <div class='innerdiv'>
                 <form action='forget1.php' method='post' id='myForm'>
                     <h3> Reset Password</h3>
                     <div  id='er'  style='font-size:10px;height:20px;'></div>
                     <table >
                     <tr>
                         <td><lable class='la'>Password :<lable></td>
                         <td><input class='in' type='password' name='password' id='password1' onblur='validate(this.name, this.value); validatepp(this.name, this.value);'></td>
                         <td><div class='error' id='password'></div></td>
                     </tr>
                     <tr>
                         <td><lable class='la'>Retype-Password :<lable></td>
                         <td><input class='in' type='password' name='repass' id='repass1' onblur='validatepp(this.name, this.value)'></td>
                         <td><div class='error' id='repass'></div></td>
                     </tr>

                           <tr ><td colspan=3 align='center'><input type='submit' value='Confirm'  onclick='checkForm()'></td></tr>
                     </table>
                     <input name='id' value='$id' style='display:none;'>

                 </form>
                 <h4 id='log'>Back to <a href='login.php'>Login</a></h4>
             </div>

             ";
             //echo $row['forget_link'];
    if( $row['forget_link']==$linkid) echo $form;
    else echo "Invalid Link";
   }
   else{echo "Invalid Link";}
 }
   else{
     echo "Invalid Link";
   }
   }
   else
   {
     header("Location: index.php");

   }
  ?>
