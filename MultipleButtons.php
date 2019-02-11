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
$selectquery = '';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$nameReq = $emailReq = $ratingReq = "";

if(isset($_POST['btnfeedback'])) 
{
if ((empty($_POST["name"])) || (empty($_POST["email"])) || (empty($_POST["experience"])) )	
{
	// Required Field Validators
	if (empty($_POST["name"])) 
	{
	$nameReq = "Name is required";
	} 
	if (empty($_POST["email"])) 
	{
	$emailReq = "Email is required";
	} 	
	if (empty($_POST["rating"])) 
	{
	$ratingReq = "rate your experience required";
	} 
}
else
{	

$name = $_POST["name"];
$mail = $_POST["email"];
$message = $_POST["message"];
$rating = $_POST["experience"];

$sql="SELECT email FROM feedback where email = '$mail' ";
$check_email = mysqli_query($conn,$sql );

if(mysqli_num_rows($check_email) > 0)
{
$error = "Email Already Exist";
}
else
{
$sql= "INSERT INTO feedback (experience,name,email,message) VALUES ('$rating','$name','$mail','$message')";
$success = "Posted your feedback successfully!";

if (!mysqli_query($conn,$sql))
{
die ('SQL Error: ' . mysqli_error($conn));
}
}
}
}
else if(isset($_POST['showfeedback'])) 
{
$sql= "SELECT * FROM feedback";
$selectquery = mysqli_query($conn, $sql);
if (!mysqli_query($conn, $sql))
{
die ('SQL Error: ' . mysqli_error($conn));
}

}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <title>Multiple Buttons</title>

    <!-- bootstrap -->        
	<link rel="stylesheet" href="assets/css/bootstrap.4.2.1.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/Scrooltop.css">
	
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
	.phead{background-color: teal;color: white;font-size: 15px;text-align: center;padding: 2px;}
	strong{color:#c7254e;}
	.bg {		
		background-image: url("assets/Images/a.jpg");				
		background-repeat: repeat-y;
		background-size: cover; 		
		}	
		.label1{
			color:black !important;
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
	
	<!-- Script for Scroll top event -->
	$(document).ready(function() {
	var btn = $('#button');
	$(window).scroll(function() {
	if ($(window).scrollTop() > 20 ) {
	btn.addClass('show');
	} else {
	btn.removeClass('show');
	}
	});
	btn.on('click', function(e) {
	e.preventDefault();
	$('html, body').animate({scrollTop:0}, '20');
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
		$("p").toggleClass("label1");
		$("h2").toggleClass("label1");
		$("small").toggleClass("label");
		$("#radio1").toggleClass("label");
		$("#radio2").toggleClass("label");
		$("#radio3").toggleClass("label");
		
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
	<!-- Scroll top anchor tag -->
		<a id="button"></a>
		
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
			<a class="dropdown-item" href="ContactForm.php">Contact Form</a>	  
			<a class="dropdown-item" href="ReadingXml.php">Reading XML File</a>
			<a class="dropdown-item" href="ErrorHandling.php">Error Handling</a>
			<a class="dropdown-item" href="AjaxCalling.php">Ajax with PHP</a>
			<a class="dropdown-item" href="MultipleButtons.php">Multiple Submit Buttons in Forms <span class="sr-only">(current)</span></a>		            
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
<div class="container">            
            <div class="row " style="padding-top:2%;">
			<div class="col-md-3"></div>
                <div class="col-md-6 col-md-offset-3 form-container">
				<?php				
				if ($_SERVER["REQUEST_METHOD"] == "GET") 
				{
				}
				else
				{
					if(isset($error))
					{
					echo "<span class='alert alert-danger' style='padding:0px;border-color:white !important;'>$error</span>" ;
					}
				}
				?>
                    <h2 class="label1">Feedback</h2>
					<p class="label1"> Please provide your feedback below: </p>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <p class="label1">How do you rate your overall experience?</p>
                                <p class="label1">
                                    <label class="radio-inline label1" id="radio1">
                                        <input type="radio" name="experience" id="radio_experience" value="Good">
                                        Good 
                                    </label>
                                    <label class="radio-inline label1" id="radio2">
                                        <input type="radio" name="experience" id="radio_experience" value="Average">
                                        Average 
                                    </label>
                                    <label class="radio-inline label1" id="radio3">
                                        <input type="radio" name="experience" id="radio_experience" value="Bad">
                                         Bad
                                    </label>
													<?php				
				if ($_SERVER["REQUEST_METHOD"] == "GET") 
				{
				}
				else
				{
					if(isset($ratingReq))
					{
					echo "<span class='alert alert-danger' style='padding:0px;border-color:white !important;'>$ratingReq</span>" ;
					}
					else
					{

					}
				}
				?>
									
                                </p>
				
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <p for="comments" class="label1"> Comments:</p>
                                <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>						
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name" class="label"> Your Name:</label>
								<?php				
				if ($_SERVER["REQUEST_METHOD"] == "GET") 
				{
				}
				else
				{
					if(isset($nameReq))
					{
					echo "<span class='alert alert-danger' style='padding:0px;border-color:white !important;'>$nameReq</span>" ;
					}
				}
				?>
                                <input type="text" class="form-control" id="name" name="name" maxlength="50" autocomplete="off" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">								
								
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email" class="label"> Email:</label>
										<?php				
				if ($_SERVER["REQUEST_METHOD"] == "GET") 
				{
				}
				else
				{
					if(isset($emailReq))
					{
					echo "<span class='alert alert-danger' style='padding:0px;border-color:white !important;'>$emailReq</span>" ;
					}
				}
				?>
                                <input type="email" class="form-control" id="email" name="email" maxlength="50" autocomplete="off" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
                            		
							</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group"> 
								<button type="submit" class="btn btn-lg pull-left" name="showfeedback" style="background-color:teal;color:white;">Show</button>							
								<button type="submit" class="btn btn-lg pull-right" name="btnfeedback" style="background-color:teal;color:white;">Post It! &rarr;</button>
                            </div>
                        </div>
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
		<hr>
		<div class="container-fluid" style="padding-bottom:5%;">
		<div class="row">		
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "GET") 
				{
				}
				else if(isset($_POST['showfeedback'])) 
				{
					?>
		
		<h5 style="background-color:teal;color:white;padding:3px;height:35px;">Feedback Details: </h5>
		<table class="table" style="background-color:aliceblue ! important">		
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Rating</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Message</th>
				<th scope="col">Updated_Date</th>
			</tr>
		</thead>
		<tbody>		
		<?php
		$no 	= 1;		
		while ($row = mysqli_fetch_array($selectquery))
		{			
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['experience'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['message'].'</td>
					<td>'.$row['time'].'</td>
				</tr>';			
			$no++;
		}?>
		</tbody>
		</table> 	
	<?php
				}
			?>
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
