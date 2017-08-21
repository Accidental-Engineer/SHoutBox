<?php



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
      n++;
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
          Thank You for creating ShoutBox account. We have sent 6-digit verification code to email <span style="color:#009688;">tarun12.tarunkr@gmail.com</span> to verify your email.
          <br>
          Vrification Code
          <br>
          <form class="" action="index.html" method="post">
            <table style="margin: auto;">
              <tr>
                <td><input type="text" name="" value="" class="code" maxlength='1' onkeyup="changeFocus(1);"></td>
                <td>-</td>
                <td><input type="text" name="" value="" class="code" maxlength='1' onkeyup="changeFocus(2);"></td>
                <td>-</td>
                <td><input type="text" name="" value="" class="code" maxlength='1' onkeyup="changeFocus(3);"></td>
                <td>-</td>
                <td><input type="text" name="" value="" class="code" maxlength='1' onkeyup="changeFocus(4);"></td>
                <td>-</td>
                <td><input type="text" name="" value="" class="code" maxlength='1' onkeyup="changeFocus(5);"></td>
                <td>-</td>
                <td><input type="text" name="" value="" class="code" maxlength='1' onkeyup="changeFocus(6);"></td>

              </tr>
              <tr >
                <td colspan="11"><input type="submit" name="" value="Next" style="border:none;background-color:#009688;color:white;font-size: 20px;padding:4px 6px 4px 6px;margin-top:12px;"></td>
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
