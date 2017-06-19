<?php

     include 'conn.php';
     include 'session.php';
 //condition for session :
    //echo "1";
     if($username && $password && $fname){
       $del=htmlentities(mysqli_real_escape_string($conn,$_POST['del']));
       if($del=="yes"){
         $noticheck="SELECT noti_index FROM users WHERE User_Id='$uid'";
         $noti=mysqli_query($conn,$noticheck);
         $notirow= mysqli_fetch_assoc($noti);
         if($notirow['noti_index']==-1){

           $q3="UPDATE `users` SET `noti_index`=0 WHERE `User_Id`='$uid';";
           $newnoti=mysqli_query($conn,$q3);
         }

       }
         else{
       $noticheck="SELECT noti_index FROM users WHERE User_Id='$uid'";
       $noti=mysqli_query($conn,$noticheck);
       $notirow= mysqli_fetch_assoc($noti);
       if($notirow['noti_index']==1){
         $newnoti=1;
         $q3="UPDATE `users` SET `noti_index`=-1 WHERE `User_Id`='$uid';";
         $newnoti=mysqli_query($conn,$q3);
       }
       else{
         $newnoti=0;
       }
       if ($newnoti==1) {
         # code...

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


    <?php  }
else {
  echo "1";
}
}
  }?>
