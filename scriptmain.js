var n=0;
var roomid;
var data = setInterval(funcnew, 1000);
var noticheck = setInterval(newnoti, 3000);
function funcnew(){


 if(n==0){

  var x = new XMLHttpRequest();
  x.onreadystatechange =function()
  {
    if(x.readyState == 4 && x.status == 200)
    {
      var rec = document.getElementById('shouts');
      //console.log(rec);
      rec.innerHTML = x.responseText;
    }
  }
  x.open('GET', 'processnew.php', true);
  x.send();
}
else{
  var dataString = 'roomid=' + roomid;
  $.ajax({
     type: "POST",
     url: "room.php",
     data: dataString,
     cache: false,
     success: function(html) {
       if(html!=1)
         document.getElementById('shouts').innerHTML = html;
         else{
           window.location = "login.php";
         }
     }
 });


}

}
//NEWNOTI FUNCTION
function newnoti(){
  $.ajax({
     type: "POST",
     url: "newnoti.php",
     cache: false,
     success: function(html) {
        if (html!=1){
         document.getElementById('notidrop').innerHTML = html;
         $(".notiicon").addClass("notinew");
       }

  }

 });

}
//END OF NEW NOTI FUNCTION
//CONFIRM AND DELETE FUNCTION
$(function(){
    $(".noti").on( "click", ".notibut",function( event ) {
        event.preventDefault();
        //console.log("working");
  var roomid= $(this).parent().parent().parent().attr('id') ;
  var type=$(this).attr('id');
  var dataString = 'roomid=' + roomid+'& type='+ type ;
  $.ajax({
     type: "POST",
     url: "confirm.php",
     data: dataString,
     cache: false,
     success: function(html) {
       if(html!=1){
         document.getElementById('notibutdiv').innerHTML = html;
         //console.log(html);

       }
         else{
           window.location = "login.php";
         }
     }
 });
    });
});

//END CONFIRM AND DELETE FUNCTION
 function func(){

   if(n==0){
   //var user = document.getElementById('user').value;
   var message = document.getElementById('message').value;
   var dataString = 'message=' + message;
   $.ajax({
      type: "POST",
      url: "process.php",
      data: dataString,
      cache: false,
      success: function(html) {
        if(html!=1)
          document.getElementById('shouts').innerHTML = html;
          else{
            window.location = "login.php";
          }
      }
  });
  document.getElementById('message').value="";
}
else{
  var message = document.getElementById('message').value;
  var dataString = 'message=' + message+'&'+'roomid='+roomid;
  $.ajax({
     type: "POST",
     url: "room.php",
     data: dataString,
     cache: false,
     success: function(html) {
       if(html!=1)
         document.getElementById('shouts').innerHTML = html;
         else{
           window.location = "login.php";
         }
     }
 });
 document.getElementById('message').value="";

}

}


//RESULT FUNCTION
function result(){
    //var user = document.getElementById('user').value;
    var find = document.getElementById('find').value;
    var dataString = 'find=' + find;
    //console.log(find);
    $.ajax({
       type: "POST",
       url: "find.php",
       data: dataString,
       cache: false,
       success: function(html) {
         if(html!=1){
           document.getElementById('drop').innerHTML = html;
           //document.getElementById('notidrop').innerHTML = html;
         }
           else{
             window.location = "login.php";
           }
       }
   });
   document.getElementById('message').value="";
  $(".dropdown").css("display","block");
    //$(".notidropdown").css("display","block");

}
//noti FUNCTION FOR NOTIFICATION icon
function noti(){
  $(".notitriangle,.notidropdown").toggleClass("notiactive");
  $(".notiicon").toggleClass("notiiconactive");
  $(".notiicon").removeClass("notinew");

  var dataString = 'del=yes' ;
  $.ajax({
     type: "POST",
     url: "newnoti.php",
     data: dataString,
     cache: false,
     success: function(html) {
     }
 });
}

//END OF NOTI FUNCTION


//Clear function for seaerch bar
var num=0;
$(".dropdown").click(function(){
num=1;
console.log("1");
});
function clearfield(){
console.log("2");
setTimeout(c,200);

}
function c(){

document.getElementById('drop').innerHTML ="";
document.getElementById('find').value = "";
$(".dropdown").css("display","none");
}
//END OF CLEAR
//chatroom FUNCTION
function chatroom(id){
    //console.log("OK");
    console.log(id);
    //var user = document.getElementById('user').value;
     $(".contactlist").removeClass("active");
    roomid=id;
    n=1;
    var dataString = 'roomid=' + id;
    $.ajax({
       type: "POST",
       url: "room.php",
       data: dataString,
       cache: false,
       success: function(html) {
         if(html!=1)
           document.getElementById('shouts').innerHTML = html;
           else{
             window.location = "login.php";
           }
       }
   });
   // document.getElementById('message').value="";
  $("#"+id).addClass("active");
}
//END OF chatroom FUNCTION
