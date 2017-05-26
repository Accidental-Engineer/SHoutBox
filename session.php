<?php

	 error_reporting (E_ALL^E_NOTICE);
	 session_start();
	  $username = $_SESSION['user'];
      $password = $_SESSION['password'];
      $fname = $_SESSION['fname'];
			$lname = $_SESSION['lname'];
			$admin =$_SESSION['admin'];
			$email =$_SESSION['email'];
			$uid =$_SESSION['userid'];
			$pic = $_SESSION['propic'];



	  //echo "Something ".$username."\n";
	 // echo $posts_liked;
	  //echo $_SESSION['Liked_Posts'];
	  //echo $_SESSION['name']."  ".$_SESSION['username']."  ".$_SESSION['password'];

?>
