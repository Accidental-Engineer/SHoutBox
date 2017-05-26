<?php
include 'conn.php';
$q1="select * from users order by User_Index desc;";
 $re = mysqli_query($conn,$q1);
 $c=0;
 $f=0;

 $subject="Accidental Engineer: Notification";
	while($row = mysqli_fetch_assoc($re)){
	    $fname=$row['First_Name'];
	    $lname=$row['Last_Name'];
            $email=$row['Email'];
            $body="Thank you ".$fname.", for your response to our ShoutBox service(http://myshoutbox.tk). We have added even new features in ShoutBox. Now you can send feedback to us through the website. Soon, we are going to add password reset option in ShoutBox. We, at Accidental Engineer, are working on some more elegant projects and invite you to coordinate(Follow us on GitHub: https://github.com/Accidental-Engineer).
		               This mail is to inform you about our facebook page(http://facebook.com/accidentalengineer), which has come up last month. Like the page to get notifications about our projects and to learn new techniques in designing and programming. Share the page too to inform your friends about us.
            	   \nFor any query or help write us. Our email-ID is engineeraccidental@gmail.com.
           	   \n\nThank You\nManagement Team\nAccidental Engineer\n\nYou are receiving this mail because you have registered at http://myshoutbox.tk." ;




	    $header='From: engineeraccidental@gmail.com';
            if(@mail($email,$subject,$body,$header)){
              $c++;
            }
            else{
              $f++;
            }
	}
  echo "success : ".$c;
  echo "Faild : ".$f;
?>
