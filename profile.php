
 <?php

     include 'conn.php';
     include 'session.php';
 //condition for session :
     if($username && $password && $fname){
//getting GET data
        $uid1=htmlentities(mysqli_real_escape_string($conn,$_GET['uid']));
        //echo $uid;
        $q1="select *,date_format(date,' %d %b %Y') as fdate from users where User_Id='$uid1';";
        $user=mysqli_query($conn,$q1);
        $row= mysqli_fetch_assoc($user);
?>
 <html>
  <head>

    <title>SHoutBox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="icon" href="shoutbox_logo_invert.png"/>
    <script src="jquery.js"></script>
    <script src="script.js"></script>


 </head>
 <body>
 		<div id='container'>
       <div class="head ">
         <div class="heading">
   				<div id="logoimg"><img src="shoutbox_logo_invert.png"></div><span id="logo">SHoutBox</span><span id='beta1' >Beta</span>
   			</div>
         <div class="heading1">
           <a href = "index.php"><div class="headingimg" ><img src="profilepic/<?php if($pic==1)echo $uid;else echo "default"; ?>.jpg" style="width:100%;"></div><?php echo $fname;  ?></a>

         <a href = "logout.php"><i class='fa fa-sign-out' aria-hidden='true'></i> Logout</a>

         </div>
       </div>
      <div  id="div">
        <div id="conlist">
         <div class="conarea">
<!-- LEFT SIDE-->
              <div class="profilepic">
                <img src="profilepic/<?php if($row['propic']==1)echo $uid1;else echo "default"; ?>.jpg" style="width:100%;">

              </div>
              <div class="proname"><?php echo $row['First_Name']." ".$row['Last_Name']; ?></div>
              <div class="proname" style="font-size: 18px; color: grey; padding:0px;">Joined on : <?php echo $row['fdate']; ?></div>
        </div>

      </div>
      <div class="bodycontainer">
 			    <div id='shouts'>

            <li class="shout" style="text-align: center; color: lightgrey; background-color: #f2f2f2; " >No Conversation yet...</li>




 			    </div>

 			<div id='input' >

         <table id="table" >
           <tr><td id="mestd"><lable id="mes">Shout :</lable> </td>
 					<td><input type="text" id = "message" name="message" placeholder="Enter Your Message"></td>
         </tr>
         <tr>
           <td colspan="2" align="center"><input type = "submit" id = "sub" value = "POST" name = "submit" onclick = "func()"></td>
         </tr>
       </table>
 			</div>

   <hr>
   <div class="fb-like" data-href="https://www.facebook.com/accidentalengineer/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
   </div>






     <div id="sidelist">
       <div class="conarea">
         <?php
         $q3="select * from chatroomdetails JOIN users ON users.User_id=chatroomdetails.user1 or users.User_id=chatroomdetails.user2 where (chatroomdetails.user1='$uid1' or chatroomdetails.user2='$uid1' ) and User_Id!='$uid1'";
         $contact=mysqli_query($conn,$q3);

         ?>
         <ul>

         <?php while($row= mysqli_fetch_assoc($contact)) : ?>

         <li class="flist" ><div class="flistimg"><img src="profilepic/<?php if($row['propic']==1)echo $uid1;else echo "default";?>.jpg" style="width:100%;"></div><?php echo $row['First_Name'] ?> <?php echo $row['Last_Name'] ?></li>
         <?php endwhile; ?>
         <li class="flist" ><div style="position:relative;"><div class="barcontainer" style="height:5%"><strong><div class="bar"><input type="text" name="find" id = "find" placeholder="Find Friend" onkeyup="result(this.name, this.value)" onblur="clearfield()"></div><div class="search"><i class="fa fa-search icon" aria-hidden="true"></i></div>

         </strong></div>
         <div class="dropdown" id="drop">

         </div>
       </div>
       </li>
         </ul>
       </div>


     </div>
 </div>
 </div>

 	</body>
 </html>
 <?php }else {

     header("Location: login.php");

   }
 ?>
