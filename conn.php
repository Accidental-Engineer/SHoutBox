<?php
$conn_error='Error Occured';
$conn=mysqli_connect('localhost','root','','shoutit');
$connect = new mysqli('localhost', 'root', '', 'shoutit');

if(!@$conn ){
  echo"error";
}
?>
