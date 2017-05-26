<?php
include "conn.php";
include "session.php";
$n=0;
if($username && $password && $fname){
$find=htmlentities(mysqli_real_escape_string($conn,$_POST['find']));
   if($find!=""){
      //echo $find;
      $q1="select User_Index, First_Name, Last_Name, User_Id, propic from users where Last_Name LIKE '%$find%' OR First_Name LIKE '%$find%'";
      $results=mysqli_query($conn,$q1);
      //print_r($results);
      //print_r($rows);
       ?>


      <ul>
       <?php while($row= mysqli_fetch_assoc($results)) : ?>
         <a href="profile.php?uid=<?php $n=$n+1; echo $row['User_Id'];?>" style="text-decoration:none;"><li class="results"><div class="flistimg">
           <img src="profilepic/<?php if($row['propic']==1)echo $row['User_Id'];else echo "default";?>.jpg" style=" width:100%;">
         </div><span class='spanfind'><?php echo $row['First_Name'] ?> <?php echo $row['Last_Name'] ?> </span></li></a>
        <?php if($n==7){break;}
       endwhile; $n=0;

       ?>
      </ul>
    <?php  }?>
<?php

}
else{


}
?>
