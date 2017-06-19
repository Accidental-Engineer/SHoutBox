<?php

     include 'conn.php';
     include 'session.php';
     $string='abcdefghijklmnopqrstuvwxyzabcdefhijklmnopqrstuvwxyz1234567891234567890';
     $string_shuff=str_shuffle($string);
     $tableid=substr($string_shuff,0,16);
 //condition for session :
     if($username && $password && $fname){
//getting GET data
        $uid1=htmlentities(mysqli_real_escape_string($conn,$_POST['uiduser']));
        //echo $uid1;
        //echo $uid;

        $q="select * from chatroomdetails JOIN users ON users.User_id=chatroomdetails.user1 or users.User_id=chatroomdetails.user2 where (chatroomdetails.user1='$uid' and chatroomdetails.user2='$uid1' ) or (chatroomdetails.user1='$uid1' and chatroomdetails.user2='$uid' )";
        $contact=mysqli_query($conn,$q);
        if($row= mysqli_fetch_assoc($contact)){
          if ($row['table_index']==1){
            echo "Request Sent";
          }
            else{
              echo "Freinds";
            }
        }
else{
        date_default_timezone_set('Asia/Kolkata');
        $time=date('H:i:s a',time());
        $date=date('Y-m-d',time());
        $dt_time=$date." ".$time;
//Insert new record in chatroomdetails
        $q1="  INSERT INTO `chatroomdetails`
        (`Room_ID`, `user1`, `user2`, `table_index`, `Create_Time`)
        VALUES ('$tableid', '$uid', '$uid1', '1', '$dt_time');";
       $create_table=mysqli_query($conn,$q1);
//Create new table of chatroom
        $q2="  CREATE TABLE `shoutit`.`$tableid` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `User_Id` varchar(16),
          `user` varchar(25) NOT NULL,
          `message` text NOT NULL,
          `time` time NOT NULL,
          `date` date NOT NULL,
           PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1 ; ";
       if($create_table=mysqli_query($conn,$q2)){
         echo "Request Sent";
//FOR NOTIFICATION
         $q3="UPDATE `users` SET `noti_index`=1 WHERE `User_Id`='$uid1';";
         $newnoti=mysqli_query($conn,$q3);
       }
       else{
         echo "Send Request";
       }
       }
      }
      else{
        //header("Location: login.php");
      }
?>
