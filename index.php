<?php

  include 'conn.php';
  include 'session.php';
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
   $q1="select user, message, time_format(time,' %h:%i%p') as ftime, date_format(date,' %d %b') as fdate , ucase(admin) as admin from shouts order by id desc;";
   $shouts=mysqli_query($conn,$q1);
  ?>
<html>
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5057956644090981",
    enable_page_level_ads: true
  });

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1918027238432498";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
	<title>SHoutBox</title>


  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css"/>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="icon" href="shoutbox_logo_invert.png"/>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="scriptmain.js"></script>
  <script>



window.fbAsyncInit = function() {
    FB.init({
      appId      : '1918027238432498',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

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
<?php  if ($row= mysqli_fetch_assoc($contact)){ ?>
            <ul>
            <li class="notiresults"><div class="notidiv" style="font-size:14px; color:#009688; border-bottom: 1px solid #009688;"><span style="margin-left:20px; ">Friend Requests</span></div></li>
<?php  do{ ?>

            <li class="notiresults" id="<?php echo $row['Room_ID'];?>"><div class="notidiv"><div class="notiimg">
              <img src="profilepic/<?php if($row['propic']==1)echo $row['User_Id'];else echo "default";?>.jpg" style=" width:100%;">
            </div><div class="notidivtext"><span class='spanfind'><?php echo $row['First_Name'] ?> <?php echo $row['Last_Name'] ?> </span></div>
            <div class="notidivbut" id="notibutdiv">
                <div class="notibut confirm" id="confirm">
                  Confirm
                </div>
                <div class="notibut delete" id="delete">
                  Delete
                </div>
            </div></div></li>         <?php }
            while($row= mysqli_fetch_assoc($contact)) ;

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
<div  id="div">

<!-- LEFT SIDE-->


      <div id="conlist">
        <div class="conarea">
          <?php
          $q3="select * from chatroomdetails JOIN users ON users.User_id=chatroomdetails.user1 or users.User_id=chatroomdetails.user2 where (chatroomdetails.user1='$uid' or chatroomdetails.user2='$uid' ) and User_Id!='$uid'";
          $contact=mysqli_query($conn,$q3);

          ?>
          <ul>
            <li class="searchdiv" ><div style="position:relative;"><div class="barcontainer" style="height:5%"><strong><div class="bar"><input type="text" name="find" id = "find" placeholder="Find Friend" onkeyup="result(this.name, this.value)" onblur="clearfield()"></div><div class="search"><i class="fa fa-search icon" aria-hidden="true"></i></div>

            </strong></div>
            <div class="dropdown" id="drop">

            </div>
          </div>
          </li>
          <?php while($row= mysqli_fetch_assoc($contact)) : ?>

          <li class="contactlist" id="roomid<?php echo $row['Room_ID']?>" onclick="chatroom(this.id)"><div class="conimg"><img src="profilepic/<?php if($row['propic']==1)echo $row['User_Id'];else echo "default";?>.jpg" style="width:100%;"></div><strong><?php echo $row['First_Name'] ?></strong> <strong><?php echo $row['Last_Name'] ?></strong></li>
          <?php endwhile; ?>
          </ul>


        </div>

      </div>
<!-- END OF LEFT SIDE-->
<!-- MID AREA-->
      <div class="bodycontainer">
			<div id='shouts'>
				<ul>
					<?php while($row= mysqli_fetch_assoc($shouts)) : ?>

					<li class="shout" ><span id='sp'><?php echo $row['fdate'] ?> <?php echo $row['ftime'] ?> </span><strong><?php echo $row['user'] ?></strong><span id='sp'> (<?php echo $row['admin'] ?>)</span> <br> <?php echo $row['message'] ?></li>
					<?php endwhile; ?>
				</ul>

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
        <div class="proimg">
          <img src="profilepic/<?php if($pic==1)echo $uid;else echo "default"; ?>.jpg" style="width:100%;">

        </div>
          <div class="sidepane" id="about"><?php echo $fname." ".$lname ?></div>
          <div class="" id="about"><a href="about.php">About the Project</a></div>
            <div class=""id="about"><a href="feedback.php">FeedBack</a></div>
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
