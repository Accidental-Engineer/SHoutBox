<link rel="stylesheet" type="text/css" href="style2.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css"/>
<link rel="icon" href="shoutbox_logo_invert.png"/>
<?php
  include "session.php";
  if(!($username && $password && $fname))
  {
 $form = "
<head>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/></head>
 <div class='innerdiv'>

                <form action='forgetpassword1.php' method='post' id='myForm'>
                    <h3> Forget Password</h3>
                    <div  id='er'  style='font-size:10px;height:20px;'></div>
                    <table >
                        <tr>
                            <td><lable class='la'>Admission No. : <lable></td>
                            <td><input type='text' name='admin' class='in' id='adminno' onblur='validate(this.name, this.value)'></td>
                            <td><div class='error' id='username'></div></td>
                        </tr>

                          <tr ><td colspan=3 align='center'><input type='submit' name='submit' value='Send Reset Link'  onclick='checkForm()'></td></tr>
                    </table>

                </form>
                <h4 id='log'>Back to  <a href='login.php'>Login!</a></h4>
            </div>

            ";

    echo $form;
  }
  else
  {
    header("Location: index.php");

  }
 ?>
