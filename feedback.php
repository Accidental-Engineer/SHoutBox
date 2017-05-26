
<link rel="stylesheet" type="text/css" href="style2.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css"/>
<link rel="icon" href="shoutbox_logo_invert.png"/>
<script src="script2.js"></script>
<?php
  include "session.php";
  if(($username && $password && $fname))
  {

 $form = "

<head>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>
<body>
 <div class='innerdiv'>

                <form onsubmit='return checkForm()' action='feedback1.php' method='post' id='feedform'>
                    <h3><i class='fa fa-comments' aria-hidden='true'></i> FeedBack</h3>
                    <table >
                        <tr>
                            <td><lable class='la'>Subject :<lable></td>
                            <td><input class='in' type='text' name='sub' id='fname1' ></td>
                            <td><div class='error' id='fname'></div></td>
                        </tr>
                        <tr>
                            <td><lable class='la'>Feedback :<lable></td>
                            <td><textarea name='feed' id='feed' class= 'in in1' placeholder='Give your Feedback....' rows='10' cols='35'></textarea></td>
                            <td><div class='error' id='lname'></div></td>
                        </tr>

                      <tr ><td colspan=3 rowspan='2' align='center'><input type='submit' name = 'submit'  value='Submit'></td></tr>
                    </table>
                      <h4 id='log'>Back to  <a href='index.php'>ShoutBox</a></h4>
            </div>
            </body>";

    echo $form;
  }
  else
  {
    header("Location: login.php");
  }
 ?>
