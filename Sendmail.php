<?php
include 'conn.php';
//$q1="select * from users order by User_Index desc;";
// $re = mysqli_query($conn,$q1);
 $c=0;
 $f=0;

 $subject="Concetto 18: EVENT REGISTRATION";
	//while($row = mysqli_fetch_assoc($re)){
	   // $fname=$row['First_Name'];
	   // $lname=$row['Last_Name'];
            $email="tarun12.tarunkr@gmail.com";
            $body="
            <html>
            <head>
            <style>
              #concetto_logo_name{width: 25px;
                height: 25px;
              }
              .clogoimg{
                  height: 100%;
                  width: 100%;
                }
                #concetto_name {
                  padding: 0px;
                  font-family: custom_xirod;
                  font-size: 16px;
                  font-weight: bold;
                  color: #888;
                  position: absolute;
                  height: 25px;
                  margin: 0px;
                  line-height: 25px;
            }
            #a{
              display: inline-flex;
            padding: 0px;
            margin: 0px;
            position: relative;
            top: 0px;
            text-decoration: none;
            color: inherit;
            line-height: 25px;
            }
            </style>
            </head>
            <body style='font-size:12px;'>
            Dear Tarun Kumar,<p>You have successfully created a team for an event named OCR. The details for the created team are as follows:</p>
            <p>Team Name : <b>BUDDY</b><br>
            TeamID : <b>MSDI12</b><br>
            Team Key : <b>ASD</b></p>
            <p>Please ask your team members to join this team using these details. Do not share these details with anyone except your team members.</p>
            <p>For any query or help, kindly contact us at <a href='mailto:contactus@concetto.tech' target='_blank'>contactus@concetto.tech</a>.</p>
            <p>Thank you<br>
            Team Concetto</p>
            <div id='concetto_name'>
            <a id='a'href='http://www.concetto.tech/' > <img src='http://www.concetto.tech/res/images/clogo.png'  id='concetto_logo_name'>ONCETTO '18</a>
            </div>
            </body>
            </html>
";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers.="From:Concetto '18 <noreply@concetto.tech>"."\r\n";

            if(@mail($email,$subject,$body,$headers)){
              $c++;
              echo "success : ".$c;
            }
            else{
              $f++;
                echo "Faild : ".$f;
            }

  //echo "success : ".$c;
  //echo "Faild : ".$f;$username $name $teamID $key $event_name

?>
