<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'sampleproject'; // Database Name
$sql = '';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

if(isset($_POST['signup'])) 
{
$member_name = $_POST["member_name"];
$sql="SELECT member_name FROM members where member_name = '$member_name' ";
$check_email = mysqli_query($conn,$sql );

if(mysqli_num_rows($check_email) > 0)
{
$message = "User Name Already Exist";
}
else{
$paswdHash = PASSWORD_HASH($_POST["member_password"], PASSWORD_DEFAULT);
$sql= "INSERT INTO members (member_name, member_password,member_email,member_mobile) VALUES ('".$_POST["member_name"]."','". $paswdHash."', '".$_POST["member_email"]."','".$_POST["member_mobile"]."')";
echo "<script>
alert('Data Sent Successfully!');
</script>";
}
if (!mysqli_query($conn,$sql))
{
die ('SQL Error: ' . mysqli_error($conn));
}
}
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <title>PHP Tutorial</title>

    <!-- bootstrap -->        
	<link rel="stylesheet" href="assets/css/bootstrap.4.2.1.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Javascript files --> 	
	<script  src="assets/js/jquery-3.1.1.min.js" ></script>
	<script src="assets/js/bootstrap.min.js"></script>
    
	<style>
	.navbar-custom { background-color: teal !important; }	
	.navbar-custom a{ color: #FFFFFF !important; }
	.dropdown-menu { background-color: teal !important; }	
	.dropdown-item { color:white !important; }
	.dropdown-item:hover { background-color: teal !important; }
	pre{background-color: #f4f4f4;text-align:justify;}	
	.bg {		
		background-image: url("assets/Images/banner8.jpeg");				
		background-repeat: repeat-y;
		background-size: cover; 		
		}	
		.label{
			color:navajowhite !important;
		}
	</style>
	
	<!-- Right click disabled using script -->
	<script language="javascript">
	$(document).ready(function()
	{ 
		   $(document).bind("contextmenu",function(e){
				  return false;
		   }); 
	})
		
	</script>

<script>

<!-- Captcha -->
function Captcha(){
var captcha;
var a = Math.floor((Math.random() * 10));
var b = Math.floor((Math.random() * 10));
var c = Math.floor((Math.random() * 10));
var d = Math.floor((Math.random() * 10));

code=a.toString()+b.toString()+c.toString()+d.toString();
document.getElementById("mainCaptcha").value = code
}
function ValidCaptcha(){
var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
var string2 = removeSpaces(document.getElementById('txtInput').value);
if (string1 == string2){
$("#hide").fadeOut(300);
$("i").fadeIn(2000);
$("i").fadeOut(1000);
$(":submit").removeAttr("disabled", true);
}
else{        
var myspan = document.getElementById("erroespan");
myspan.innerHTML = "Please enter a valid captcha.";
myspan.classList.add("alert-danger");
}
}
function removeSpaces(string){
return string.split(' ').join('');
}

<!-- Check Password and Confirm Password-->
function Validpassword(){
var string1 = removeSpaces(document.getElementById('member_password').value);
var string2 = removeSpaces(document.getElementById('member_cnfpassword').value);
if (string1 != string2){
var myspan = document.getElementById("errorspan");
myspan.innerHTML = "Password Mismatched";
myspan.classList.add("alert-danger");
}
else{
var myspan = document.getElementById("errorspan");
myspan.innerHTML = "";
myspan.classList.remove("alert-danger");
}

}
function removeSpaces(string){
return string.split(' ').join('');
}
</script>

<script>

// Background toggle using jquery
	$(document).ready(function()
	{
		$("#fonticon").addClass("fa-toggle-on");		
		$(".bgset").click(function()
		{
		$("body").toggleClass("bg");
		$("label").toggleClass("label");
		$("small").toggleClass("label");
		var calssname=$("#fonticon").attr('class');

		if(calssname=='fa fa-toggle-on')
		{
		$("#fonticon").removeClass("fa fa-toggle-on");
		$("#fonticon").addClass("fa fa-toggle-off");	
		}
		if(calssname=='fa fa-toggle-off')
		{
		$("#fonticon").removeClass("fa fa-toggle-off");	
		$("#fonticon").addClass("fa fa-toggle-on");
		}
	
			
		});
	});
	
</script>

</head>	
<body onload="Captcha();" class="bg">
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
  <a class="navbar-brand" href="#">Core PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
	 <li class="nav-item active">
        <a class="nav-link" href="Basic.php">Basic<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Advanced.php">Advanced</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Login</a>
      </li>     
	  <li class="nav-item">
        <a class="nav-link" href="Signup.php">Registration</a>
      </li>    
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Examples
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item" href="DatabaseConnectivity.php">Database Connectivity</a>	  
		<a class="dropdown-item" href="SqlInjection.php">Sql Injection</a>	
<a class="dropdown-item" href="DataGrids.php">DataGrids</a>		
		<a class="dropdown-item" href="ContactForm.php">Contact Form</a>	  
          <a class="dropdown-item" href="ReadingXml.php">Reading XML File</a>
          <a class="dropdown-item" href="ErrorHandling.php">Error Handling</a>
		  <a class="dropdown-item" href="AjaxCalling.php">Ajax with PHP</a>
		  <a class="dropdown-item" href="MultipleButtons.php">Multiple Submit Buttons in Forms</a>		            
          <a class="dropdown-item" href="AutoSuggest.php">Auto Suggest</a>
        </div>
      </li> 	  
    </ul>
	<ul class="nav navbar-nav navbar-right ml-auto" style="vertical-align:middle;">
			<li class="navbar-form-wrapper">
				<form class="navbar-form form-inline navbar-right">
					<div class="input-group search-box">								
						<input type="text" id="search" class="form-control" placeholder="Search Here...">						
					</div>
				</form>
			</li>			
		</ul>
  </div>
</nav>
<button class="bgset pull-right btn btn-info" style="margin-top:5px;">
<span id="fonticon" class="fa fa-toggle-on"></span>
</button>
<div class="container" style="padding-top:2%;">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="" method="post" id="frmLogin">
<div class="panel-heading" style="background-color:teal;text-align:center;height:50px;padding-top:10px;">
<strong style="color:white;"> Signup Form</strong>
</div><br>
<fieldset>
<div class="field-group">
<div>            
<label for="login" class="label">User Name</label>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
}
else
{
	if(isset($message))
	{
	echo "<span class='alert alert-danger' style='padding:0px;'>$message</span>" ;
	}
}	
?>
</div>
<div>
<input name="member_name" type="text" class="form-control" autocomplete = "off" required maxlength="6">
</div>
</div>

<div class="field-group">
<div>
<label for="login" class="label">Email</label>
</div>
<div>
<input name="member_email" type="email" class="form-control" autocomplete = "off" required>
</div>
</div>

<div class="field-group">
<div>
<label for="password" class="label">Password </label>
</div>
<div>
<input name="member_password" type="password" id="member_password" class="form-control" autocomplete = "off" required maxlength="8">
</div>
</div>

<div class="field-group">
<div>
<label for="Cnfpassword" class="label">Confirm Password</label>
</div>
<div>
<input name="member_cnfpassword" type="password" id="member_cnfpassword" class="form-control" autocomplete = "off" onblur="Validpassword();" required maxlength="8">
</div>
</div>

<div class="field-group">      
<div class = "text-center">
<span id = "errorspan"></span>
</div>
</div>

<div class="field-group">
<div>
<label for="mobile" class="label">Mobile</label>
</div>
<div>
<input name="member_mobile" type="text" class="form-control" autocomplete = "off" required maxlength="10">
</div>
</div>

<section id = "hide">
<div class="field-group">
<div>
<label for="Captcha" class="label">Captcha</label>
</div>
<div style = "display:flex;">
<input type="text" id="mainCaptcha"  class="form-control" disabled> &nbsp;&nbsp;
<button type="button" id="refresh" class="btn btn-sm pull-right" value="Refresh" onclick="Captcha();" style="color:white;background-color:teal;">Refresh</button>
</div>
</div>

<div class="field-group">
<div style = "display:flex;">
<input type="number" placeholder = "Type Here:" id="txtInput" class="form-control" max="4"/> &nbsp;&nbsp;
<button id="Button1" type="button" class="btn btn-sm pull-right" onclick="ValidCaptcha();" style="color:white;background-color:teal;">Submit</button>
</div>
</div>

<div class="field-group">      
<div class = "text-center">
<span id = "erroespan"></span>
</div>
</div>
</section>
<br>
<div class="field-group">
<div align="center">
<input type="submit" name="signup" value="Sign Up" class="btn btn-sm" style="color:white;background-color:teal;">		
</div>
</div>
</fieldset>
</form><br>
<div class="panel-footer" align="center">
<a href="index.php" class="btn btn-sm" style="background-color:teal;color:white;">Click Here To Login</a>
</div>
</div>
<div class="col-md-4"></div>
</div>
</div>

<!-- Footer -->
       <footer style="background-color: teal;position:fixed;bottom:0;width:100%;">
            <div class="container-fluid">                               
                <div class="row">
				<div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p style="color:white;padding:5px;">Copyright 2019 - All rights reserved.</p>
                    </div> 
				<div class="col-md-4 text-right">
				<a href="#" style="color: white;font-size: 25px; padding: 5px;"><i class="fa fa-facebook"></i></a>
				<a href="#" style="color: white;font-size: 25px; padding: 5px;"><i class="fa fa-twitter"></i></a>
				<a href="#" style="color: white;font-size: 25px; padding: 5px;"><i class="fa fa-google-plus"></i></a>
				</div>					
                </div>
            </div>
        </footer>
		
</body>
</html>
