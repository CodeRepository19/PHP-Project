<?php
session_start();
if(empty($_SESSION["member_name"]))
{
header("Location: index.php");
}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <title>SQL Injection</title>

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
	.jumbotron
	{
		background: url('assets/Images/banner4.jpg') center; 		
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
	
	<!-- Hide and show the php code -->
	$(document).ready(function() 
	{
      $(".hidephp").hide();
		var heading = $('p');
		heading.on('click', function(e) 
		{
			//$("pre").fadeToggle();
			$(this).siblings(".hidephp").fadeToggle(300);

		});
	});
	
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
	
	</script>
	
</head>

 <body>
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
		<a class="dropdown-item" href="SqlInjection.php">Sql Injection <span class="sr-only">(current)</span></a>	  
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
			
			<li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>	
		</ul>
  </div>
</nav>

<div class="container-fluid" style="padding-top:1%;">
<strong>SQL Injection: </strong>
<span>SQL Injection is a technique used by the hackers to change SQL statements running at the backend from forged executed SQL commands. Such kind of injections is usually done through <strong>input fields</strong> of the form causing a bad effect on database. This results in loss of sensitive information from the database.
Through such tactics, attackers input vulnerable data to SQL interpreter that executes unintended commands. By such PHP MySQL injections, attackers may insert, update or even delete data from database.</span>
<strong>Cause Of SQL Injection:</strong>
<ul>
<li>Incorrectly filtered space characters</li>
<li>Incorrect Type handling</li>
<li>Passing unsanitized data to DB</li>
<li>Not using full Unicode encoding</li>
<li>Mixing of the code and data.</li>
<li>Use of quotation marks to delimit strings</li>
</ul>
</div>
<hr>

<div class="container-fluid" style="padding-bottom:5%;">
<div class="row">
<div class="col-md-6">
<p class="phead">Example 1</p>
<div class="hidephp">
<span>we have a form containing 2 text fields <strong>username</strong> and <strong>password</strong>, along with a login button. The backend PHP code will be as follows:</span>
<pre>
&lt;php?
$userName=$_POST['userName'];
 
$password=$_POST['password'];
 
$sqlQuery="SELECT * FROM users WHERE user_name='".$username."' AND user_password='".$password"';";
?&gt;
</pre>
<span>The above code contains a loophole, if a user enters <strong>‘ or ‘a’=’a ‘or’</strong> then the variable $password will have the value <strong>‘ or ‘a’=’a ‘or’</strong></span>
<pre>
&lt;php?
$sqlQuery="SELECT * FROM users WHERE user_name='".$username."' AND user_password='' or 'a'='a';";
?&gt;
</pre>
<strong>
In the above example, the statement a=a is always true.
So the statement is executed without the matching of the actual password.
</strong>
</div>
</div>

<div class="col-md-6">
<p class="phead">Example 2</p>
<div class="hidephp">
<span>Select query from a sql db.</span>
<pre>
&lt;php?
$expected_data = 1;
$query = "SELECT * FROM users where id=$expected_data";
?&gt;
</pre>
<span>will produce a regular query</span>
<pre>
SELECT * FROM users where id=1
</pre>
<span>while this code can surprise you.</span>
<pre>
&lt;php?
$spoiled_data = "1; DROP TABLE users;"
$query   = "SELECT * FROM users where id=$spoiled_data";
?&gt;
</pre>
<strong>will produce a malicious sequence</strong>
<pre>
SELECT * FROM users where id=1; DROP TABLE users;
</pre>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6">
<p class="phead">Solutions to SQL injection vulnerabilities</p>
<div class="hidephp">
<span>For avoiding SQL injections is using PHP Prepared Statements. A prepared statement is a feature in PHP which enables users to execute similar SQL queries efficiently and repeatedly.</span>

<strong>Advantages of Executing Prepare Statements</strong>
<ul>
<li>It reduces parsing time as the query is executed once but can be executed multiple times with the same parameters.</li>
<li>Bound parameters reduce the bandwidth to the server because the whole query is not sent every time but the parameters are sending.</li>
<li>Bound Parameters reduces the bandwidth as the whole query is not sent every time but parameters are sent.</li>
</ul>
<pre>
&lt;php
$stmt=$conn->prepare(INSERT INTO MyGuests(firstname,lastname,email)VALUES(?,?,?)");
 
$stmt->bind_param("sss",$firstname,$lastname,$email);
 
//set paramters and execute
 
$firstname="John";
 
$lastname="Doe";
 
$email="john@example.com";
 
$stmt->execute();
 
$firstname="Mary";
 
$lastname="Moe";
 
$email="mary@example.com";
 
$stmt->execute();
?&gt;
</pre>
</div>
</div>
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
