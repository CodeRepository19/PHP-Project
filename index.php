<?php
session_start();

require_once "Auth.php";
require_once "Util.php";

$auth = new Auth();
$db_handle = new DBController();
$util = new Util();

require_once "authCookieSessionValidate.php";

if ($isLoggedIn) {
$util->redirect("Basic.php");
}
$nameErr = $emailErr = $passwordErr = $CpasswordErr = $mobileErr = "";

if (! empty($_POST["login"])) 
{
$isAuthenticated = false;

$username = $_POST["member_name"];
$password = $_POST["member_password"];

$user = $auth->getMemberByUsername($username);
if (password_verify($password, $user[0]["member_password"])) {
$isAuthenticated = true;
}

if ($isAuthenticated) {
$_SESSION["member_id"] = $user[0]["member_id"];
$_SESSION["member_name"] = $user[0]["member_name"];

// Set Auth Cookies if 'Remember Me' checked
if (! empty($_POST["remember"])) {
	
setcookie("member_login", $username, $cookie_expiration_time);

$random_password = $util->getToken(16);
setcookie("random_password", $random_password, $cookie_expiration_time);

$random_selector = $util->getToken(32);
setcookie("random_selector", $random_selector, $cookie_expiration_time);

$random_password_hash = password_hash($random_password, PASSWORD_DEFAULT);
$random_selector_hash = password_hash($random_selector, PASSWORD_DEFAULT);

$expiry_date = date("Y-m-d H:i:s", $cookie_expiration_time);

// mark existing token as expired
$userToken = $auth->getTokenByUsername($username, 0);
if (! empty($userToken[0]["id"])) {
$auth->markAsExpired($userToken[0]["id"]);
}
// Insert new token
$auth->insertToken($username, $random_password_hash, $random_selector_hash, $expiry_date);
} else {
$util->clearAuthCookie();
}
$util->redirect("Basic.php");
} else {
$message = "Invalid Login";
}
}

?>

<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <title>PHP Code Repository</title>

    <!-- bootstrap -->        
	<link rel="stylesheet" href="assets/css/bootstrap.4.2.1.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	
	
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
		background-image: url("assets/Images/banner1.jpeg");		
		background-position: center;
		background-repeat: no-repeat;
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
	$(document).ready(function () {
	setTimeout(function () {
	$("#cookieConsent").fadeIn(200);
	}, 100);
	$("#closeCookieConsent, .cookieConsentOK").click(function () {
	$("#cookieConsent").fadeOut(200);
	});
	$("#closeCookieConsent, .cookieConsentmoreinfo").click(function () {
	});
	}); 
	
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

	// Show/Hide Passowrd
	function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

	</script>

</head>

<body class="bg">
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
<div class="container" style="padding-top:8%;">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="" method="post" id="frmLogin">
<div class="panel-heading" style="background-color:teal;text-align:center;height:50px;padding:10px;">
<strong style="color:white;"> Login Form</strong>
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
<input name="member_name" type="text" class="form-control" autocomplete = "off" placeholder="Enter User Name" required maxlength="6">
<small id="emailHelp" class="form-text text-muted label">We'll never share your username with anyone else.</small>&nbsp;
</div>
</div>

<div class="field-group">
<div>
<label for="password" class="label">Password</label>
</div>
<div>
<input name="member_password" type="password" id="pwd" class="form-control" placeholder="Enter Password" required maxlength="8">
<input type="checkbox" onclick="myFunction()"><label for="password" class="label">&nbsp; Show Password</label>
</div>
</div>&nbsp; 	

<div class="field-group">    
	<input type="checkbox" name="remember" id="remember" 
<?php if(isset($_COOKIE["member_login"])) { ?> checked
<?php } ?> />
<label class="form-check-label label" for="remember">Click to Remember me</label>
</div>
  
<div class="field-group">      
<div class = "text-center">
<i class="fa fa-check-circle fa-5x icon-background" aria-hidden="true" style = "display:none;"></i>
</div>
</div>	&nbsp;	

<div class="field-group">
<div align="center">
<input type="submit" name="login" value="Login" class="btn btn-sm" style="background-color:teal;color:white;">
</div>
</div>								
</fieldset>
</form>
<div align="center" class="panel-footer" >
<a href="signup.php" class="btn btn-sm" style="background-color:teal;color:white;">Click Here to Sign Up</a>
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

