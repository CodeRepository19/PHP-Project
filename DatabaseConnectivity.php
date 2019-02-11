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
    <title>Database Connectivity</title>

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
	
	<!-- Right click disabled using script -->
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
			<a class="dropdown-item" href="DatabaseConnectivity.php">Database Connectivity <span class="sr-only">(current)</span></a>	  
			<a class="dropdown-item" href="ContactForm.php">Contact Form</a>	  
			<a class="dropdown-item" href="DataGrids.php">DataGrids</a>
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

<div class="container-fluid" style="padding-top:2%;">
<div class="row">
<div class="col-md-12">
<span>There are two ways to connect to a Database in PHP.
<ul>
<li><strong>MySQLi</strong> : MySQLi will only work with MySQL databases. </li>
<li><strong>PDO (PHP Data Objects)</strong>: PDO will work on 12 different database systems</li>
</ul>
</span>
</div>
</div>
</div>
<hr>

<div class="container-fluid" style="padding-bottom:5%;">
<div class="row">
<div class="col-md-6">
<p class="phead">MySQLi Procedural</p>
<div class="hidephp">
<ul>
<li>The main method used in this script is <strong>mysqli_connect()</strong>.</li>
<li><strong>mysqli_connect()</strong> function is an internal function used to opens a new connection to the MySQL server.</li>
<li>Usually, we need four variables to establish a proper connection: <strong>$servername</strong>, <strong>$database</strong>, <strong>$username</strong> and <strong>$password</strong>.</li>
<li><strong>mysqli_connect() </strong> function use those variables to pass onto the function to create a database connection..</li>
<li>A function <strong>die()</strong> is executed here, which basically kills our script and gives us a message that we have set. So this will by default say Connection failed:</li>
<li>If the connection is successful, our success message will display.</li>
<li><strong>mysqli_close($conn);</strong> This will simply close the connection to a database manually.</li>
</ul>
<pre>
&lt;?php
$servername = "localhost"; // Give Your Server Name
$database = "SampleDB"; // Give Your Database Name
$username = "root"; // Give Your Username here
$password = "*******"; // Give Your password here

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?&gt;
</pre>
</div>
</div>
<div class="col-md-6">
<p class="phead">PDO (PHP Data Objects)</p>
<div class="hidephp">
<ul>
<li>PDO uses a data source name (DSN), which contains the <strong>database server name</strong>, <strong>database name</strong>, and other parameters, that helps create a connection to a database server.</li>
<li>Different database system requires different data source name. To connect to MySQL, the syntax is: <strong>mysql:host=host_name;dbname=db_name</strong></li>
<li>The MySQL data source name contains the host name and database name which you want to connect to.</li>
<li>To connect to MySQL, the syntax is: <strong>pgsql:host=host_name;dbname=db_name</strong></li>
</ul>
<pre>
&lt;?php
$servername = "localhost"; // Give Your Server Name
$database = "SampleDB"; // Give Your Database Name
$username = "root"; // Give Your Username here
$password = "*******"; // Give Your password here

$dbconfig= "mysql:host=$servername;dbname=$database";

try {
	// create a PDO connection with the configuration data
    $conn = new PDO(dbconfig, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
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
