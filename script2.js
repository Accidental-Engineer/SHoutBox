function checkForm()
{
//fetching values from all input fields and storing them in variables
var fname = document.getElementById("fname1").value;
var lname = document.getElementById("lname1").value;
    var uname = document.getElementById("username1").value;
    var password = document.getElementById("password1").value;
    var email = document.getElementById("email1").value;
    var repass = document.getElementById("repass1").value;

//Check input Fields Should not be blanks.
    if (fname=='' || lname=='' || uname == '' || password == '' || email == '' || repass == '')
    {
        alert("All Fields Are Mandatory.");
    }

    else
    {

	//Notifying error fields
	var username1 = document.getElementById("username");
    var password1 = document.getElementById("password");
    var email1 = document.getElementById("email");
    var repass1 = document.getElementById("repass");

	//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
        if (username1.innerHTML == 'Invalid Format' || password1.innerHTML == 'Password too short'|| username1.innerHTML == 'Admission already exists'|| email1.innerHTML == 'Invalid email' || repass1.innerHTML == 'Password does not match.!!' || repass1.innerHTML == '')
        {  if( password1.innerHTML == 'Password too short' )
            {
            return false;
          }
            else{
              password1.innerHTML == 'Password too short';
              return false;
            }
        }
        else
        {
		//Submit Form When All values are valid.
            return true;
            document.getElementById("myForm").submit();
        }
    }
}

//AJAX Code to check  input field values when onblur event triggerd.
function validate(field, query)
{
	var xmlhttp;
//for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();


    xmlhttp.onreadystatechange = function()
    {

        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById(field).innerHTML = xmlhttp.responseText;
        }

    }
    xmlhttp.open("GET", "validation2.php?field=" + field + "&query=" + query, true);
    xmlhttp.send();
}
function validatep(field, query)
{
	var xmlhttp;
//for IE7+, Firefox, Chrome, Opera, Safari

var password = document.getElementById("password1").value;



      if(password!=query ){
        document.getElementById(field).innerHTML = "Password does not match.!!";
          }
          else if(password=='' && query==''){
              document.getElementById(field).innerHTML = "";
          }
            else{
            document.getElementById(field).innerHTML = "<span>Retype-Password matched</span>";
          }




}
function validatepp(field, query)
{
	var xmlhttp;
//for IE7+, Firefox, Chrome, Opera, Safari

var rpassword = document.getElementById("repass1").value;
var password = document.getElementById("password1").value;
      if(password == '') {
document.getElementById('repass').innerHTML = "";
        return;}
      if(rpassword == '' && password == '') return;

      if(password==rpassword ){
        document.getElementById("repass").innerHTML = "<span>Retype-Password matched</span>";

          }
          else if((password!='' && rpassword=='')|| (password=='' && query!='')){
              document.getElementById('repass').innerHTML = "";
          }
            else{
              document.getElementById('repass').innerHTML = "Password does not match.!!";

          }




}
