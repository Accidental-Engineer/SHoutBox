<?php

     include 'conn.php';
     include 'session.php';
 //condition for session :
     if($username && $password && $fname){
//getting GET data
        $roomid=htmlentities(mysqli_real_escape_string($conn,$_POST['roomid']));
        $type=htmlentities(mysqli_real_escape_string($conn,$_POST['type']));
        //echo $uid1;
        //echo $type;
//FOR BUTTON CONFIRM
        if($type=="confirm"){
        $q1="UPDATE `chatroomdetails` SET `table_index`='-1' WHERE `Room_ID`='$roomid';";
        $update=mysqli_query($conn,$q1);
        echo "<span style='color:#009688;text-align:right;font-size: 18px;margin-left: 55px;'>Freinds</spna>";
        //echo $uiduser;
      }
        if($type=="delete"){
          $q2="DELETE FROM `chatroomdetails` WHERE `Room_ID`='$roomid';";
          $q3="DROP TABLE $roomid;";
          $deletechatroomdetail=mysqli_query($conn,$q2);
          $droptable=mysqli_query($conn,$q3);
          echo "<span style='color:gray;text-align:right;font-size: 18px;margin-left: 55px;'>Deleted</spna>";
        }

    }
?>
