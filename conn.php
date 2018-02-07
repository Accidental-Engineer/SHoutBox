<?php
$conn_error='Error Occured';
$conn=mysqli_connect('localhost','root','7277933031','shoutit');
$connect = new mysqli('localhost', 'root', '7277933031', 'shoutit');
if(!@$conn ){
  die($conn_error);
}
?>
