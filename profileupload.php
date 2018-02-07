<?php
  $location = "profilepic/";

  if (isset($_FILES['file']['name'])) {
    if (!empty($_FILES['file']['name'])) {
      $name = $_FILES['file']['name'];
      $size = $_FILES['file']['size'];
      $type = $_FILES['file']['type'];

      $max_size = 2097152;
      $extension = strtolower(substr($name , strpos($name, '.')+1));
      $temp_name = $_FILES['file']['tmp_name'];
      if( ($extension == 'jpg' || $extension == 'jpeg') && $size < $max_size && $type== 'image/jpeg'){
        if(move_uploaded_file($temp_name,$location.$name)){
        echo "Uploaded.....";
        }
        else {
          echo "error";
        }
      }
      else{
        if (($extension != 'jpg' || $extension != 'jpeg') && $type != 'image/jpeg') {
          echo "Select an Image file !!";
        }
        elseif ($size > $max_size) {
          echo "File size must be less than 2MB";
        }
      }
    }

  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="upload.css">
     <title>Update</title>
     <script src="jquery.js"></script>
     <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
     <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>
     <script type="text/javascript">
       $(function() {
         $(".propic_view_container").draggable().resizable();
      });
     </script>
   </head>
   <body>
      <div class="container">
        <div class="header_container">
         <div class="header left">
           <div id="logoimg"><img src="shoutbox_logo_invert.png"></div>
         </div>
         <div class="header right">
         </div>
       </div>
       <div class="body">
         <div class="upperheader">
           <h1>Update Your Profile</h1>
         </div>
         <div>
           <div class="bodymaincontainer">
             <div class="bodymainleft bodymain">
               <div class="propic_view_container">

               </div>
             </div>
             <div class="bodymainright bodymain">
               <form class="" action="profileupload.php" method="post" enctype="multipart/form-data">
                 <input type="file" name="file"><br>
                 <input type="submit" value="Upload">
               </form>
             </div>
           </div>
       </div>
       </div>
      </div>
   </body>
 </html>
