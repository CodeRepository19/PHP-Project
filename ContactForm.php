<?php

session_start();
if(empty($_SESSION["member_name"]))
{
header("Location: index.php");
}

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'sampleproject'; // Database Name
$sql = '';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

if(isset($_POST['btnContactUs'])) 
{
$name = $_POST["name"];
$mail = $_POST["email"];
$message = $_POST["message"];

$sql="SELECT email FROM contact where email = '$mail' ";
$check_email = mysqli_query($conn,$sql );

if(mysqli_num_rows($check_email) > 0)
{
$error = "Email Already Exist";
}
else
{
$sql= "INSERT INTO contact (name,email,message) VALUES ('$name','$mail', '$message')";
$success = "Sent your message successfully!!";

if (!mysqli_query($conn,$sql))
{
die ('SQL Error: ' . mysqli_error($conn));
}
}
}
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <title>PHP Basic</title>

    <!-- bootstrap -->        
	<link rel="stylesheet" href="assets/css/bootstrap.4.2.1.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/Scrooltop.css">
	
	<!-- Javascript files --> 	
	<script  src="assets/js/jquery-3.1.1.min.js" ></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
	
	<style>
	.navbar-custom { background-color: teal !important; }	
	.navbar-custom a{ color: #FFFFFF !important; }
	.dropdown-menu { background-color: teal !important; }	
	.dropdown-item { color:white !important; }
	.dropdown-item:hover { background-color: teal !important; }
	pre{background-color: #f4f4f4;text-align:justify;}
	.phead{background-color: teal;color: white;font-size: 15px;text-align: center;padding: 2px;}		
	.bg {		
	background-image: url("assets/Images/Contact.jpg");		
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover; 		
	}

	.label{
	color:navajowhite !important;
	}
	</style>
		
	<script language="javascript">
		
	<!-- Right click disabled -->
	$(document).ready(function()
	{ 
		   $(document).bind("contextmenu",function(e){
				  return false;
		   }); 
	})
	
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

 <body class="bg">
		
 <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
  <a class="navbar-brand" href="#">Core PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
	 <li class="nav-item active">
        <a class="nav-link" href="Basic.php">Basic</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Advanced.php">Advanced</a>
      </li> 
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Examples
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item" href="DatabaseConnectivity.php">Database Connectivity</a>	  
		<a class="dropdown-item" href="SqlInjection.php">Sql Injection</a>	  
		<a class="dropdown-item" href="DataGrids.php">DataGrids</a>
		<a class="dropdown-item" href="ContactForm.php">Contact Form <span class="sr-only">(current)</span></a>	  
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
			
			<li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>	
		</ul>
  </div>
</nav>

<button class="bgset pull-right btn btn-info" style="margin-top:5px;">
<span id="fonticon" class="fa fa-toggle-on"></span>
</button>

 <div class="container" style="padding-top:5%;">
            <div class="row">
			<div class="col-md-3"></div>
                <div class="col-md-6 col-md-offset-3">
				<?php				
				if ($_SERVER["REQUEST_METHOD"] == "GET") 
				{
				}
				else
				{
					if(isset($error))
					{
					echo "<span class='alert alert-danger' style='padding:0px;'>$error</span>" ;
					}
				}
				?>
                    <label class="label"><h2>Contact Us</h2></label>&nbsp;&nbsp;&nbsp;<label class="label"> Got a question ? Feedback?</label>
                    <label class="label"> Send your message in the form below and we will get back to you as early as possible. </label>
                    <form action="" method="post" id="reused_form" >
                        <div class="form-group">
                            <label for="name" class="label"> Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required maxlength="50" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="email" class="label"> Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required maxlength="50" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="name" class="label"> Message:</label>
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                        </div>                      
                        <button type="submit" class="btn btn-lg pull-right" name="btnContactUs" style="background-color:teal;color:white;">Post It! &rarr;</button>
                    </form>  
		<?php				
				if ($_SERVER["REQUEST_METHOD"] == "GET") 
				{
				}
				else
				{
					if(isset($success))
					{
					echo "<span class='alert alert-success' style='padding:0px;'>$success</span>" ;
					}
				}
				?>					
                </div>
				<div class="col-md-3"></div>
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