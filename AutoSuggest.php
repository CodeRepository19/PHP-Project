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
    <title>Auto Suggestions</title>

    <!-- bootstrap -->        
	<link rel="stylesheet" href="assets/css/bootstrap.4.2.1.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/Scrooltop.css">
	
	<!-- Javascript files --> 	
	<script  src="assets/js/jquery-3.1.1.min.js" ></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
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
	</style>
		
	<script language="javascript">
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
	if ($(window).scrollTop() > 500 ) {
	btn.addClass('show');
	} else {
	btn.removeClass('show');
	}
	});
	btn.on('click', function(e) {
	e.preventDefault();
	$('html, body').animate({scrollTop:0}, '500');
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
						<input type="text" id="searchsite" class="form-control" placeholder="Search Here...">						
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
<span><strong>Ajax :</strong> is the acronym for Asynchronous <b>JavaScript</b> & <b>XML</b>.</span><br>
<ul>
<li>Used to reduces the interactions between the server and client.</li>
<li>Used to updating only part of a web page rather than the whole page</li>
<li>The asynchronous interactions are initiated by JavaScript.</li>
<li>Validation can be performed done as the user fills in a form without submitting it. This can be achieved using auto completion. The words that the user types in are submitted to the server for processing. The server responds with keywords that match what the user entered.</li>
<li>It can be used to populate a dropdown box depending on the value of another dropdown box.</li>
<li>Data can be retrieved from the server and only a certain part of a page updated without loading the whole page. This is very useful for web page parts that load things like
<ul>
<li>Tweets</li>
<li>Commens</li>
<li>Users visiting the site etc.</li>
</ul>
</li>
</ul>
<span><strong>JavaScript :</strong> is a client side scripting language. It is executed on the client side by the web browsers that support JavaScript. JavaScript code only works in browsers that have JavaScript enabled.</span><br>
<span><strong>XML :</strong>  is the acronym for Extensible Markup Language. It is used to encode messages in both human and machine readable formats. It’s like HTML but allows you to create your custom tags.</span><br>

</div>
<hr>

<div class="container-fluid" style="padding-bottom:5%;">
<div class="row">
<div class="col-md-6">
<p class="phead">PHP with Ajax Example (AutoSuggest.php):</p>
<div class="hidephp">
<pre>
AutoSuggest.php :
&lt;!-- Including jQuery is required. --&gt;
&lt;script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"&gt;&lt;/script/&gt;
&lt;!-- Including our scripting file. --&gt;
&lt;script type="text/javascript" src="script.js"&gt;&lt;/script&gt;

&lt;input type="text" id="search" placeholder="Search" /&gt;
&lt;div id="display"&gt;&lt;/div&gt;
</pre>
</div>
</div>
<div class="col-md-6">
<p class="phead">PHP with Ajax Example (Script.js):</p>
<div class="hidephp">
<pre>
Script.js:
function fill(Value) 
{
//Assigning value to "search" div in "search.php" file.
$('#search').val(Value);
//Hiding "display" div in "search.php" file.
$('#display').hide();
}
$(document).ready(function() 
{
//On pressing a key on "Search box" in "search.php" file. This function will be called.
$("#search").keyup(function() 
{
//Assigning search box value to javascript variable named as "name".
var name = $('#search').val();
//Validating, if "name" is empty.
if (name == "") 
{
//Assigning empty value to "display" div in "search.php" file.
$("#display").html("");
}
//If name is not empty.
else {
//AJAX is called.
$.ajax({
//AJAX type is "Post".
type: "POST",
//Data will be sent to "ajax.php".
url: "ajax.php",
//Data, that will be sent to "ajax.php".
data: {
//Assigning value of "name" into "search" variable.
search: name
},
//If result found, this funtion will be called.
success: function(html) 
{
//Assigning result to "display" div in "search.php" file.
$("#display").html(html).show();
},
error: function (request, status, error) 
{
alert(request.responseText);
}
});
}
});
});
</pre>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6">
<p class="phead">PHP with Ajax Example (ajax.php):</p>
<div class="hidephp">
<pre>
ajax.php :
&lt;?php
//Including Database configuration file.

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'sampleproject'; // Database Name
$sql = '';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) 
{
//Search box value assigning to $Name variable.
$Name = $_POST['search'];
//Search query.
$Query = "SELECT member_name FROM members WHERE member_name LIKE '%$Name%'";
//Query execution
$ExecQuery = MySQLi_query($conn, $Query);
echo '
&lt;h5 class="alert alert-success"&gt;Get Data From DB Using Ajax AutoSuggest feture.&lt;/h5&gt;
&lt;table class="table"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col">ID&lt;/th&gt;
&lt;th scope="col">Name&lt;/th&gt;
&lt;th scope="col">Email&lt;/th&gt;
&lt;th scope="col">Mobile&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;	
';
//Fetching result from database.
while ($Result = mysqli_fetch_array($ExecQuery)) 
{	
?&gt;
&lt;tr&gt;
&lt;!-- Creating table with rows.
Calling javascript function named as "fill" found in "script.js" file.
By passing fetched result as parameter. --&gt;
&lt;td onclick='fill("&lt;?php echo $Result['member_id']; ?&gt;")'&gt;
&lt;a&gt;
&lt;!-- Assigning searched result in "Search box" in "search.php" file. --&gt;
&lt;?php echo $Result['member_id']; ?&gt;
&lt;/td&lt;&gt;/a&gt;
&lt;td onclick='fill("&lt;?php echo $Result['member_name']; ?&gt;")'&gt;
&lt;a&gt;
&lt;!-- Assigning searched result in "Search box" in "search.php" file. --&gt;
&lt;?php echo $Result['member_name']; ?&gt;
&lt;/td&gt;&lt;/a&gt;
&lt;td onclick='fill("&lt;?php echo $Result['member_email']; ?&gt;")'&gt;
&lt;a&gt;
&lt;!-- Assigning searched result in "Search box" in "search.php" file. --&gt;
&lt;?php echo $Result['member_email']; ?&gt;
&lt;/td&gt;&lt;/a&gt;
&lt;td onclick='fill("&lt;?php echo $Result['member_mobile']; ?&gt;")'&gt;
&lt;a&gt;
&lt;!-- Assigning searched result in "Search box" in "search.php" file. --&gt;
&lt;?php echo $Result['member_mobile']; ?&gt;
&lt;/td&gt;&lt;/a&gt;&lt;/tr&gt;
&lt;!-- Below php code is just for closing parenthesis. Don't be confused. --&gt;
&lt;?php
}
}
?&gt;
</pre>
</div>
</div>


<div class="col-md-6">
<p class="phead">Output:</p>
<div class="hidephp">
<input type="text" class="form-control" name="search" id="search" placeholder="Search" autocomplete="off" />
<br>
<div id="display"></div>

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
