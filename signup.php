
<link rel="stylesheet" type="text/css" href="style2.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css"/>
<link rel="icon" href="shoutbox_logo_invert.png"/>
<script src="script2.js"></script>
<?php
  include "session.php";
  if(!($username && $password && $fname))
  {

 $form = "

<head>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>
<body>
 <div class='innerdiv'>

                <form onsubmit='return checkForm()' action='signup1.php' method='post' id='myForm'>
                    <h3><i class='fa fa-user-plus' aria-hidden='true'></i> Signup</h3>
                    <table >
                        <tr>
                            <td><lable class='la'>First Name :<lable></td>
                            <td><input class='in'type='text' name='fname' id='fname1' onkeyup='validate(this.name, this.value)'></td>
                            <td><div class='error' id='fname'></div></td>
                        </tr>
                        <tr>
                            <td><lable class='la'>Last Name :<lable></td>
                            <td><input class='in'type='text' name='lname' id='lname1'onkeyup='validate(this.name, this.value)'></td>
                            <td><div class='error' id='lname'></div></td>
                        </tr>
                        <tr>
                            <td><lable class='la'>Admission No. :<lable></td>
                            <td><input class='in'type='text' name='username' id='username1' onkeyup='validate(this.name, this.value)'></td>
                            <td><div class='error' id='username'></div></td>
                        </tr>
                        <tr>
                            <td><lable class='la'>Password :<lable></td>
                            <td><input class='in' type='password' name='password' id='password1' onkeyup='validate(this.name, this.value); validatepp(this.name, this.value);'></td>
                            <td><div class='error' id='password'></div></td>
                        </tr>
                        <tr>
                            <td><lable class='la'>Retype-Password :<lable></td>
                            <td><input class='in' type='password' name='repass' id='repass1' onkeyup='validatepp(this.name, this.value)'></td>
                            <td><div class='error' id='repass'></div></td>
                        </tr>
                        <tr>
                            <td><lable class='la'>Email :<lable></td>
                            <td><input class='in' type='text' name='email' id='email1' onkeyup='validate(this.name, this.value)'></td>
                            <td><div class='error' id='email'></div></td>
                        </tr>
                      <tr ><td colspan=3 rowspan='2' align='center'><input type='submit' name = 'submit'  value='Sign Up'></td></tr>
                    </table>
                      <h4 id='log'>Already have an account? <a href='login.php'> Login!</a></h4>
            </div>
            </body>";

    echo $form;
  }
  else
  {
    include "index.php";
  }
 ?>
