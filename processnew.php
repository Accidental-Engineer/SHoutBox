<?php include "conn.php"  ?>
<?php
$q1="select user, message, ucase(admin) as admin , time_format(time,' %h:%i%p') as ftime, date_format(date,' %d %b') as fdate from shouts order by id desc;";
$shouts=mysqli_query($conn,$q1);
 ?>
<ul>
  <?php while($row= mysqli_fetch_assoc($shouts)) : ?>
    <li class="shout"><span id='sp'><?php echo $row['fdate'] ?><?php echo $row['ftime']?> </span><strong><?php echo $row['user'] ?></strong><span id='sp'> (<?php echo $row['admin'] ?>)</span> <br> <?php echo $row['message'] ?></li>

  <?php endwhile; ?>
</ul>
