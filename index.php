<?php
include 'conn.php';
 ?>
 <?php include 'session.php'; ?>
 <?php


      if($username && $password && $fname)
      {
?>
 <?php
 $q1="select user, message, time_format(time,' %h:%i%p') as ftime, date_format(date,' %d %b') as fdate , ucase(admin) as admin from shouts order by id desc;";
 $shouts=mysqli_query($conn,$q1);
  ?>
<html>
<head>
	<title>SHoutBox</title>


  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css"/>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="icon" href="shoutbox_logo_invert.png"/>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
  <script>

  var data = setInterval(funcnew, 1000);
  function funcnew(){


  	var x = new XMLHttpRequest();
  	x.onreadystatechange =function()
  	{
  		if(x.readyState == 4 && x.status == 200)
  		{
  			var rec = document.getElementById('shouts');
  			rec.innerHTML = x.responseText;
  		}
  	}
  	x.open('GET', 'processnew.php', true);
  	x.send();

}
   function func(){

     //var user = document.getElementById('user').value;
     var message = document.getElementById('message').value;
     var dataString = 'message=' + message;
     $.ajax({
        type: "POST",
        url: "process.php",
        data: dataString,
        cache: false,
        success: function(html) {
            document.getElementById('shouts').innerHTML = html;
        }
    });
    document.getElementById('message').value="";
}
</script>
</header>
</head>
	<body>
		<div id='container'>
      <div class="head">
        <div class="heading">
  				<div id="logoimg"><img src="shoutbox_logo_invert.png"></div><span id="logo">SHoutBox</span><span id='beta1' >Beta</span>
  			</div>
        <div class="heading1">
          <i class="fa fa-user" aria-hidden='true'></i> <?php echo "Hi, ".$fname ?>
          <br>
        <a href = "logout.php"><i class='fa fa-sign-out' aria-hidden='true'></i> Logout</a>
        </div>
      </div>
<div  id="div">
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
      <div id="about"><a href="about.php">ABOUT THE PROJECT</a><div>
        <div id="about"><a href="feedback.php">FeedBack</a><div>
  <hr>
      <div id="about1">Developed and Created by Tarun Kumar And Shivam Kumar<div>

		</div>
</div>

	</body>
</html>
<?php }else {

    include 'login.php';
  }
?>
