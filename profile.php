<?php

     include 'conn.php';
     include 'session.php';
 //condition for session :
     if($username && $password && $fname){
       $noticheck="SELECT noti_index FROM users WHERE User_Id='$uid'";
       $noti=mysqli_query($conn,$noticheck);
       $notirow= mysqli_fetch_assoc($noti);
       if($notirow['noti_index']==1 || $notirow['noti_index']==-1){
         $newnoti=1;
       }
       else{
         $newnoti=0;
       }
//getting GET data
        $uid1=htmlentities(mysqli_real_escape_string($conn,$_GET['uid']));
        //echo $uid;
        $q1="select *,date_format(date,' %d %b %Y') as fdate from users where User_Id='$uid1';";
        $user=mysqli_query($conn,$q1);
        $row= mysqli_fetch_assoc($user);
        //$uiduser=$_GET['uid'];
        //echo $uiduser;
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
      <script src="scriptmain.js"></script>
    <script type="text/javascript">
    function request(){
      var message = document.getElementById('message').value;
      var dataString = 'uiduser=' +'<?php echo $uid1 ?>';
      $.ajax({
         type: "POST",
         url: "request.php",
         data: dataString,
         cache: false,
         success: function(html) {
           if(html!=1)
             document.getElementById('frequest').innerHTML = html;
             else{
               window.location = "login.php";
             }
         }
     });
     //document.getElementById('message').value="";
    }

    </script>


 </head>
 <body>
 		<div id='container'>
      <div class="head ">
        <div class="heading">
         <div id="logoimg"><img src="shoutbox_logo_invert.png"></div><span id="logo">SHoutBox</span><span id='beta1' >Beta</span>
       </div>
       <div class="heading1">
         <div style="float:left;width:50%;height:100%;">

         </div>
         <div style="float:left;position:relative;">
         <div style="float:left;"><a href = "index.php"><div class="headingimg" ><img src="profilepic/<?php if($pic==1)echo $uid;else echo "default"; ?>.jpg" style="width:100%;"></div><?php echo $fname;  ?></a></div>
         <div style="float:left; height:75px; width:26px;" ><div class="noti" ><i class="fa fa-bell-o notiicon <?php if($newnoti==1){echo "notinew";}?>" aria-hidden="true" onclick="noti()"></i><div class="notitriangle"></div><div class="notidropdown" id="notidrop">
<?php
//PHP SCRIPT FOR NOTIFICATION icon
         $qnoti="select * from chatroomdetails JOIN users ON users.User_id=chatroomdetails.user1 or users.User_id=chatroomdetails.user2 where  chatroomdetails.user2='$uid' and User_Id!='$uid' and table_index=1 ;";
         $contact=mysqli_query($conn,$qnoti);
?>
         <ul>
<?php  if ($row1= mysqli_fetch_assoc($contact)){ ?>
           <ul>
           <li class="notiresults"><div class="notidiv" style="font-size:14px; color:#009688; border-bottom: 1px solid #009688;"><span style="margin-left:20px; ">Friend Requests</span></div></li>
<?php  do{ ?>

           <li class="notiresults" id="<?php echo $row1['Room_ID'];?>"><div class="notidiv"><div class="notiimg">
             <img src="profilepic/<?php if($row1['propic']==1)echo $row1['User_Id'];else echo "default";?>.jpg" style=" width:100%;">
           </div><div class="notidivtext"><span class='spanfind'><?php echo $row1['First_Name'] ?> <?php echo $row1['Last_Name'] ?> </span></div>
           <div class="notidivbut" id="notibutdiv">
               <div class="notibut confirm" id="confirm">
                 Confirm
               </div>
               <div class="notibut delete" id="delete">
                 Delete
               </div>
           </div></div></li>         <?php }
           while($row1= mysqli_fetch_assoc($contact)) ;

}
else{
 ?>
   <li class="notiresults"><div class="notidiv" style="font-size:14px; color:#009688; "><span style="margin-left:20px; ">No New Notifications </span></div></li>



 <?php
}
?>
          </ul>
               </div>
             </div>
         </div><div style="float: left;"><div class="headingimg hrule" > </div></div>

       <div style="float:left;" ><a href = "logout.php"><i class='fa fa-sign-out' aria-hidden='true'></i> Logout</a></div>
     </div>

     </div>
   </div>
<!-- LEFT SIDE-->
        <div id="conlist">
         <div class="conarea">

              <div class="profilepic">
                <img src="profilepic/<?php if($row['propic']==1)echo $uid1;else echo "default"; ?>.jpg" style="width:100%;">

              </div>
              <div class="proname"><?php echo $row['First_Name']." ".$row['Last_Name']; ?></div>
              <div class="proname" style="font-size: 18px; color: grey; padding:0px;">Joined on : <?php echo $row['fdate']; ?></div>
              <div class="request" onclick="request()">
                <?php $q="select * from chatroomdetails JOIN users ON users.User_id=chatroomdetails.user1 or users.User_id=chatroomdetails.user2 where (chatroomdetails.user1='$uid' and chatroomdetails.user2='$uid1' ) or (chatroomdetails.user1='$uid1' and chatroomdetails.user2='$uid' )";
                $contact=mysqli_query($conn,$q);
                if($row= mysqli_fetch_assoc($contact)){
                  if ($row['table_index']==1){
                    ?>
                    <span id="frequest">Request Sent</span>
                    <?php
                  }
                    else{ ?>

                      <span id="frequest">Freinds</span>
                      <?php  }?>
                      <?php
                    }


                else{?>
                <span id="frequest">Send Request</span>
                <?php } ?>
              </div>
        </div>

      </div>
<!-- END OF LEFT SIDE-->
<!-- MID AREA-->
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
<!--END OF MID AREA-->

<!--RIGHT SIDE-->


     <div id="sidelist">
       <div class="conarea">
         <?php
         $q3="select * from chatroomdetails JOIN users ON users.User_id=chatroomdetails.user1 or users.User_id=chatroomdetails.user2 where (chatroomdetails.user1='$uid1' or chatroomdetails.user2='$uid1' ) and User_Id!='$uid1' ;";
         $contact=mysqli_query($conn,$q3);

         ?>
         <ul>

         <?php while($row= mysqli_fetch_assoc($contact)) : ?>

         <li class="flist" ><div class="flistimg"><img src="profilepic/<?php if($row['propic']==1) echo $row['User_Id'];else echo "default";?>.jpg" style="width:100%;"></div><?php echo $row['First_Name'] ?> <?php echo $row['Last_Name'] ?></li>
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
<!--END OF RIGHT SIDE-->
 </div>
 </div>

 	</body>
 </html>
 <?php }else {

     header("Location: login.php");

   }
 ?>
