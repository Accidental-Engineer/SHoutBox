<?php
$conn_error='Error Occured';
$conn=mysqli_connect('localhost','root','04081995@tarun','shoutit');
if(!@$conn ){
  die($conn_error);
}
?>
