<?php
include "conn.php";
include "session.php";
//if(isset($_POST['submit'])){
  //$user=mysqli_real_escape_string($conn,$_POST['user']);
  if($username && $password && $fname)
  {
    $message=htmlentities(mysqli_real_escape_string($conn,$_POST['message']));
    $roomid=htmlentities(mysqli_real_escape_string($conn,$_POST['roomid']));
    //echo $message;
    //echo $roomid;
    date_default_timezone_set('Asia/Kolkata');
    $time=date('H:i:s a',time());
    $date=date('Y-m-d',time());
    //$queryin="INSERT INTO `shouts`( `admin`,`user`, `message`, `time`, `date`) VALUES ( '$username','$fname', '$message', '$time', '$date')";
    if(!isset($message)  || $message==""){
      //echo $error='Please fill all fields.';
      // header('Location: index.php?error='.urlencode($error));
    }
    else{
      $queryin="INSERT INTO $roomid ( `User_Id`,`user`, `message`, `time`, `date`) VALUES ( '$uid','$fname', '$message', '$time', '$date')";

      if(!mysqli_query($conn, $queryin)){
      //  echo ('error1'.mysqli_error($conn));
      }
      else{



  }
}
$time1=date('d M h:i A',time());
$q2="select user, message, time_format(time,'%h:%i%p') as ftime, date_format(date,' %d %b') as fdate , User_Id  from $roomid order by id desc;";
$shouts=mysqli_query($conn,$q2);
?>
<ul>
  <?php while($row= mysqli_fetch_assoc($shouts)) : ?>
    <li class="shout"><span id='sp'><?php echo $row['fdate'] ?> <?php echo $row['ftime'] ?> </span><strong><?php echo $row['user'] ?></strong> <br> <?php echo $row['message'] ?></li>

  <?php endwhile; ?>
</ul>
<?php


}
  else{
    echo"1";
  }
  ?>
