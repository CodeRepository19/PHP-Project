<?php
session_start();
if(empty($_SESSION["member_name"]))
{
header("Location: index.php");
}
?>

<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <title>PHP Advanced</title>

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
	.jumbotron
	{
		background: url('assets/Images/banner3.jpeg') center; 		
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
	
	<style>
	strong{color:#c7254e;}
	</style>
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
        <a class="nav-link" href="Advanced.php">Advanced <span class="sr-only">(current)</span></a>
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
			
			<li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>	
		</ul>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4" style="font-weight:400;">Welcome, to Core PHP Advanced!</h1>
    <p class="lead"style="font-weight:400;">PHP is the most popular server-side scripting language for creating dynamic web pages.</p>
  </div>
</div>


<div class="container-fluid">
<div class="row">
<div class="col-md-4" id = "PHPcode">
<p class="phead">PHP Include() and Require() Files</p>
<div class="hidephp">
<span>
The <strong>require()</strong> function is identical to <strong>include()</strong>, except that it handles errors differently. If an error occurs, the <strong>include()</strong> function generates a warning, but the script will continue execution. The <strong>require()</strong> generates a fatal error, and the script will stop.
The <strong>include_once()</strong> and <strong>require_once()</strong> functions will not include the file a second time if it has already been included.
</span>
<pre>
&lt;?php
&lt;?php include "config.php"; ?&gt;
&lt;?php require "header.php"; ?&gt;
&lt;?php include_once "menu.php"; ?&gt;
&lt;?php require_once "footer.php"; ?&gt;
?&gt;
</pre>
</div>
</div>
<div class="col-md-3" id = "PHPcode">
<p class="phead">PHP time()</p>
<div class="hidephp">
<span>
The <strong>time()</strong> function is used to get the current time as a Unix timestamp
</span>
<pre>
&lt;?php
$timestamp = time();
echo($timestamp);
echo(date("F d,Y h:i:s",$timestamp));
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$timestamp = time();
echo($timestamp) . '<br>';
echo(date("F d, Y h:i:s", $timestamp));
?>
</div>
</div>
<div class="col-md-5" id = "PHPcode">
<p class="phead">PHP mktime()</p>
<div class="hidephp">
<span>
The <strong>mktime()</strong> function is used to create the timestamp based on a specific date and time. If no date and time is provided, the timestamp for the current date and time is returned.
</span><br>
<strong><code>mktime(hour, minute, second, month, day, year)</code></strong>
<pre>
&lt;?php
echo mktime(15, 20, 12, 5, 10, 2014);
echo(date("F d, Y h:i:s", mktime(15, 20, 12, 02, 01, 2019)));
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
echo mktime(15, 20, 12, 5, 10, 2014) . '<br>';
echo(date("F d, Y h:i:s", mktime(15, 20, 12, 02, 01, 2019)));
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<p class="phead">PHP Date</p>
<div class="hidephp">
<span>
<ul>
<li>d - Represent day of the month; two digits with leading zeros (01 or 31)</li>
<li>D - Represent day of the week in text as an abbreviation (Mon to Sun)</li>
<li>m - Represent month in numbers with leading zeros (01 or 12)</li>
<li>M - Represent month in text, abbreviated (Jan to Dec)</li>
<li>y - Represent year in two digits (08 or 14)</li>
<li>Y - Represent year in four digits (2008 or 2014)</li>
</ul>
</span>
<pre>
&lt;?php
echo date("d/m/Y");
echo date("d-m-Y");
echo date("d.m.Y");
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
echo date("d/m/Y").'<br>';
echo date("d-m-Y").'<br>';
echo date("d.m.Y").'<br>';
?>
</div>
</div>

<div class="col-md-6">
<p class="phead">PHP Time</p>
<div class="hidephp">
<span>
<ul>
<li>h - Represent hour in 12-hour format with leading zeros (01 to 12)</li>
<li>H - Represent hour in in 24-hour format with leading zeros (00 to 23)</li>
<li>i - Represent minutes with leading zeros (00 to 59)</li>
<li>s - Represent seconds with leading zeros (00 to 59)</li>
<li>a - Represent lowercase ante meridiem and post meridiem (am or pm)</li>
<li>A - Represent uppercase Ante meridiem and Post meridiem (AM or PM)</li>
</ul>
</span>
<pre>
&lt;?php
echo date("h:i:s");
echo date("F d, Y h:i:s A");
echo date("h:i a");
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
echo date("h:i:s") . "<br>";
echo date("F d, Y h:i:s A") . "<br>";
echo date("h:i a");
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<p class="phead">PHP File Systems</p>
<div class="hidephp">
<strong><code>fopen(filename, mode)</code></strong>
<div>
                    <table>
                        <thead>
                            <tr>
                            	<th>Modes</th>
                            	<th style="padding-left:8px;">Working</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>r</code></td>
                                <td>Open the file for reading only.</td>
                            </tr>
                            <tr>
                                <td><code>r+</code></td>
                                <td>Open the file for reading and writing.</td>
                            </tr>
                            <tr>
                                <td><code>w</code></td>
                                <td>Open the file for writing only and clears the contents of file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>w+</code></td>
                                <td>Open the file for reading and writing and clears the contents of file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>a</code></td>
                                <td>Append. Opens the file for writing only. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>a+</code></td>
                                <td>Read/Append. Opens the file for reading and writing. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>x</code></td>
                                <td>Open the file for writing only. Return <code>FALSE</code> and generates an error if the file already exists. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>x+</code></td>
                                <td>Open the file for reading and writing; otherwise it has the same behavior as 'x'.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
	</div>
	</div>
	</div>
	</div>
	<hr>
<div class="container-fluid">
	<div class="row">
<div class="col-md-4">
<p class="phead">fopen() function</p>
<div class="hidephp">
<pre>
&lt;?php
$handle = fopen("data.txt", "r"); 
?&gt;
</pre>
</div>
</div>

<div class="col-md-4">
<p class="phead">file_exists() function</p>
<div class="hidephp">
<pre>
&lt;?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to open the file
$handle = fopen($file, "r") r die("ERROR: Cannot open the file.");
} else{
    echo "ERROR: File does not exist.";
}
?&gt;
</pre>
</div>
</div>
<div class="col-md-4">
<p class="phead">fclose() function</p>
<div class="hidephp">
<pre>
&lt;?php
$file = "data.txt";
 // Check the existence of file
if(file_exists($file)){
    // Open the file for reading
    $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");
    // Closing the file handle
    fclose($handle);
} else{
    echo "ERROR: File does not exist.";
}
?&gt;
</pre>
</div>
</div>	
</div>
</div>

<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<p class="phead">Reading Fixed Number of Characters</p>
<div class="hidephp">
<strong><code>fread(file handle, length in bytes)</code></strong>
<pre>
&lt;?php
$file = "data.txt"; 
if(file_exists($file)){
// Open the file for reading
$handle = fopen($file, "r") or die("ERROR: Cannot open the file.");
	
// <strong style="background-color:teal;color:white;">Read fixed number of bytes from the file</strong>
$content = fread($handle, "20");
	
//<strong style="background-color:teal;color:white;">Reading the entire file</strong>
$content = fread($handle, filesize($file));

// <strong style="background-color:teal;color:white;">Simple way to read the file</strong>
readfile($file) or die("ERROR: Cannot open the file.");

//<strong style="background-color:teal;color:white;">Reading the entire file into a string.</strong>
$content = file_get_contents($file) or die("ERROR: Cannot open the file.");
	
//<strong style="background-color:teal;color:white;">Reading the entire file into an array</strong>
$arr = file($file) or die("ERROR: Cannot open the file.");
foreach($arr as $line){
	echo $line;
}
// Closing the file handle
fclose($handle);
	
// Display the file content 
echo $content;
} else{
    echo "ERROR: File does not exist.";
}
?&gt;
</pre>
</div>
</div>
<div class="col-md-6">
<p class="phead">PHP fwrite() Function</p>
<div class="hidephp">
<strong><code>fwrite(file handle, string)</code></strong>
<pre>
&lt;?php
$file = "note.txt";
    
// String of data to be written
$data = "The quick brown fox jumps over the lazy dog.";
    
// Open the file for writing
$handle = fopen($file, "w") or die("ERROR: Cannot open the file.");
    
// Write data to the file
fwrite($handle, $data) or die ("ERROR: Cannot write the file.");
    
// Closing the file handle
fclose($handle);
    
echo "Data written to the file successfully.";
?&gt;
</pre>
</div>
</div>
</div>
</div>

<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<p class="phead">PHP file_put_contents() Function</p>
<div class="hidephp">
<strong><code>file_put_contents(filename string, data string)</code></strong><br>
<span>
If the file specified in the <strong>file_put_contents()</strong> function already exists, PHP will overwrite it by default.
If you overcome this you can pass the special <strong>FILE_APPEND</strong> flag as a third parameter to the file_put_contents() function.
It will simply append the new data to the file instead of overwitting it.
</span>
<pre>
&lt;?php
$file = "note.txt";
    
// String of data to be written
$data = "The quick brown fox jumps over the lazy dog.";
    
//<strong style="background-color:teal;color:white;">Write data to the file</strong>
file_put_contents($file, $data) or die("ERROR: Cannot write the file.");
    
//<strong style="background-color:teal;color:white;">pass the special FILE_APPEND flag as a third parameter</strong>
file_put_contents($file, $data, FILE_APPEND) or die("ERROR: Cannot write the file.");

echo "Data written to the file successfully.";
?&gt;
</pre>
</div>
</div>
<div class="col-md-6">
<p class="phead">PHP rename() Function</p>
<div class="hidephp">
<strong><code>rename(old filename, new filename)</code></strong><br>
<span>
You can rename a file or directory using the PHP's rename() function.
</span>
<pre>
&lt;?php
$file = "file.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to rename the file
    if(rename($file, "newfile.txt")){
        echo "File renamed successfully.";
    } else{
        echo "ERROR: File cannot be renamed.";
    }
} else{
    echo "ERROR: File does not exist.";
}
?&gt;
</pre>
</div>
</div>
</div>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<p class="phead">PHP unlink() Function</p>
<div class="hidephp">
<span>
You can delete files or directories using the PHP's unlink() function.
</span>
<pre>
&lt;?php
$file = "note.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to delete the file
    if(unlink($file)){
        echo "File removed successfully.";
    } else{
        echo "ERROR: File cannot be removed.";
    }
} else{
    echo "ERROR: File does not exist.";
}
?&gt;
</pre>
</div>
</div>

<div class="col-md-6">
<p class="phead">PHP Filesystem Functions</p>
<div class="hidephp">
<span>Below are the file system functions in PHP.</span>
<div>
                    <table>
                        <thead>
                            <tr>
                            	<th style="width: 150px;">Function</th>
                            	<th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>fgetc()</code></td>
                                <td>Reads a single character at a time.</td>
                            </tr>
                            <tr>
                                <td><code>fgets()</code></td>
                                <td>Reads a single line at a time.</td>
                            </tr>
                            <tr>
                                <td><code>fgetcsv()</code></td>
                                <td>Reads a line of comma-separated values.</td>
                            </tr>
							<tr>
                                <td><code>filetype()</code></td>
                                <td>Returns the type of the file.</td>
                            </tr>
							<tr>
                                <td><code>feof()</code></td>
                                <td>Checks whether the end of the file has been reached.</td>
                            </tr>
							<tr>
                                <td><code>is_file()</code></td>
                                <td>Checks whether the file is a regular file.</td>
                            </tr>
							<tr>
                                <td><code>is_dir()</code></td>
                                <td>Checks whether the file is a directory.</td>
                            </tr>
							<tr>
                                <td><code>is_executable()</code></td>
                                <td>Checks whether the file is executable.</td>
                            </tr>
							<tr>
                                <td><code>realpath()</code></td>
                                <td>Returns canonicalized absolute pathname.</td>
                            </tr>
							<tr>
                                <td><code>rmdir()</code></td>
                                <td>Removes an empty directory.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
</div>
</div>
</div>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<p class="phead">PHP Super Global Variables</p>
<div class="hidephp">
<span>
List of PHP superglobal variables .
<div>
                    <table>
                        <thead>
                            <tr>
                            	<th style="width: 150px;">Global Variable</th>                            	
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>$GLOBALS</code></td>                                
                            </tr>
							 <tr>
                                <td><code>$_REQUEST</code></td>                                
                            </tr>
                            <tr>
                                <td><code>$_SERVER</code></td>                                
                            </tr> 
							<tr>
                                <td><code>$_GET</code></td>                                
                            </tr>							
							<tr>
                                <td><code>$_POST</code></td>                                
                            </tr>							
							<tr>
                                <td><code>$_FILES</code></td>                                
                            </tr>
							<tr>
                                <td><code>$_ENV</code></td>                                
                            </tr>
							<tr>
                                <td><code>$_COOKIE</code></td>                                
                            </tr>
							<tr>
                                <td><code>$_SESSION</code></td>                                
                            </tr>						
                        </tbody>
                    </table>
                </div>
</span>
</div>
</div>
<div class="col-md-4">
<p class="phead">PHP $GLOBALS Global Variable</p>
<div class="hidephp">
<span>
<strong>$GLOBAL</strong> is a php super global variable which contains all global variables in php script, including other superglobals.
</span>
<pre>
&lt;?php
$x = 75;
$y = 25; 
function substraction() {
$GLOBALS['sub'] = $GLOBALS['x'] - $GLOBALS['y'];
}
function addition() {
$GLOBALS['Sum'] = $GLOBALS['x'] + $GLOBALS['y'];
}
substraction();
addition();
echo $sub;
echo $Sum;
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$x = 75;
$y = 25; 
function substraction() {
$GLOBALS['sub'] = $GLOBALS['x'] - $GLOBALS['y'];
}
function addition() {
$GLOBALS['Sum'] = $GLOBALS['x'] + $GLOBALS['y'];
}
substraction();
addition();
echo $sub . '<br>';
echo $Sum;
?>
</div>
</div> 

<div class="col-md-5">
<p class="phead">PHP $_REQUEST  Gloabl Variable</p>
<div class="hidephp">
<span>
<strong>$_REQUEST</strong> is used to access the data after submission of HTML Form. Form method can be either 'GET' or 'POST'.
</span>
<pre>
&lt;?php
error_reporting(0);
&lt;form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get" &gt;
  User Name: &lt;input type="text" name="user_name"&gt;
  &lt;input type="submit"&gt;
&lt;/form
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_REQUEST['user_name']) {
        echo $_REQUEST['user_name'];
    } else {
        echo "User Name is empty";
    }
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get" >
  User Name: <input type="text" class="form-control" name="user_name">
  <input type="submit" class="btn btn-info">
</form>
<?php 
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_REQUEST['user_name']) {
        echo $_REQUEST['user_name'];
    } else {
        echo "User Name is empty";
    }
}
?>
</div>
</div> 
</div>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<p class="phead">PHP $_SERVER Global Variable</p>
<div class="hidephp">
<span>
<strong>$_SERVER</strong> is an array also known as PHP super global variable that holds information about headers, paths and script location and entries in these array are created by web servers.
<div>
                    <table>
                        <thead>
                            <tr>
                            	<th style="width: 35%;">Code</th>                            	
								<th>Description</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>$_SERVER['SERVER_ADDR']</code></td>                                
								<td><span>Used to display the IP address of the host server.</span></td>                                
                            </tr>
                            <tr>
                                <td><code>$_SERVER['SERVER_NAME']</code></td>       
								<td><span>Used to display the host server's name .</span></td>                                								
                            </tr>
                            <tr>
                                <td><code>$_SERVER['SERVER_SOFTWARE']</code></td> 
								<td><span>Used to display the server identification string.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['SERVER_PROTOCOL']</code></td> 
								<td><span>Used to display the name and revision of the information protocol.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['REQUEST_METHOD']</code></td>  
								<td><span>Used to display the request method used to access the page. i.e. 'GET','POST'.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['REQUEST_TIME']</code></td> 
								<td><span>Used to display the timestamp of the start of the request.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['QUERY_STRING']</code></td>   
								<td><span>Used to display the query string if the page is accessed via a query string.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['HTTP_ACCEPT']</code></td> 
								<td><span>Used to display the Accept header from the current request.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['HTTP_ACCEPT_CHARSET']</code></td> 
								<td><span>Used to display the Accept_Charset header from the current request.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['HTTP_HOST']</code></td> 
								<td><span>Used to display the Host header from the current request.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['HTTP_REFERER']</code></td> 
								<td><span>Used to display the complete URL of the current page (not reliable because not all user-agents support it).</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['HTTPS']</code></td> 
								<td><span>Is the script queried through a secure HTTP protocol</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['REMOTE_PORT']</code></td> 
								<td><span>Used to display the port being used on the user's machine to communicate with the web server.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['SCRIPT_FILENAME']</code></td> 
								<td><span>Used to display the absolute pathname of the currently executing script.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['SERVER_ADMIN']</code></td> 
								<td><span>Used to display the value given to the SERVER_ADMIN directive in the web server configuration file.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['REMOTE_ADDR']</code></td> 
								<td><span>Used to display the IP address from where the user is viewing the current page.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['REMOTE_HOST']</code></td> 
								<td><span>Used to display the Host name from where the user is viewing the current page.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['SERVER_PORT']</code></td> 
								<td><span>Used to display the port which is being used on the local machine to communicate with the web server.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['SERVER_SIGNATURE']</code></td> 
								<td><span>Used to display the server version and virtual host name which are added to server-generated pages.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['PATH_TRANSLATED']</code></td> 
								<td><span>Used to display the file system based path to the current script.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['SCRIPT_NAME']</code></td> 
								<td><span>Used to display the current script's path.</span></td>                                																
                            </tr>
							<tr>
                                <td><code>$_SERVER['SCRIPT_URI']</code></td> 
								<td><span>Used to display the current page's URI.</span></td>                                																
                            </tr>							
                        </tbody>
                    </table>
                </div>
</span>
</div>
</div>
</div>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<p class="phead">PHP $_GET  Gloabl Variable</p>
<div class="hidephp">
<span>
<strong>$_GET</strong> Used to collect value from a form(HTML script) sent with method=’get’.
 Information sent from a form with the method=’get’ is visible to everyone.
</span>
<pre>
&lt;?php
error_reporting(0);
&lt;form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" &gt;
  User Name: &lt;input type="text" name="user_name"&gt;
  &lt;input type="submit"&gt;
&lt;/form
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET['user_name']) {
        echo $_GET['user_name'];
    } else {
        echo "User Name is empty";
    }
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" >
  User Name: <input type="text" class="form-control" name="user_name" autocomplete="off">
  <input type="submit" class="btn btn-info">
</form>
<?php 
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET['user_name']) {
        echo $_GET['user_name'];
    } else {
        echo "User Name is empty";
    }
}
?>
</div>
</div>


<div class="col-md-6">
<p class="phead">PHP $_POST Gloabl Variable</p>
<div class="hidephp">
<span>
<strong>$_POST</strong> Used to collect value in a form with method=”post”. Information sent from a form is invisible to others.
</span>
<pre>
&lt;?php
error_reporting(0);
&lt;form method="post" &gt;
  User Name: &lt;input type="text" name="user_name"&gt;
  &lt;input type="submit"&gt;
&lt;/form
if (isset($_POST['user_name'])) {
	echo $_POST['user_name'];
    } else {
        echo "User Name is empty";
    }
?&gt;
</pre>
<strong><p>Output:</p></strong>
<form method="post" >
  User Name: <input type="text" class="form-control" name="user_name" autocomplete="off">
  <input type="submit" class="btn btn-info">
</form>
<?php 
error_reporting(0);
if (isset($_POST['user_name'])) {
	echo $_POST['user_name'];
    } else {
        echo "User Name is empty";
    }
?>
</div>
</div>

</div>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<p class="phead">PHP $_FILES Gloabl Variable</p>
<div class="hidephp">
<span>
<strong>$_FILES</strong> Used to upload files from a client computer/system to a server.
</span>
<pre>
&lt;?php
error_reporting(0);
&lt;form method="post" enctype="multipart/form-data"&gt;
	Upload a File:
&lt;input type="file" name="myfile" id="fileToUpload"&gt;
 &lt;input type="submit" name="submit" value="Upload File Now"&gt;
&lt;/form&gt;
$currentDir = getcwd();
    $uploadDirectory = "/uploads/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 

  if (isset($_POST['submit'])) {

if (! in_array($fileExtension,$fileExtensions)) {
$errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
}

if ($fileSize > 2000000) {
$errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
}

if (empty($errors)) {
$didUpload = move_uploaded_file($fileTmpName, $uploadPath);

if ($didUpload) {

echo "The file " . basename($fileName) . " has been uploaded" ;
} else {
echo "An error occurred somewhere. Try again or contact the admin" ;
}
} else {
foreach ($errors as $error) {

echo "$error . 'These are the errors' . '\n'" ;
}
}
    }
?&gt;

</pre>
<strong><p>Output:</p></strong>
<form method="post" enctype="multipart/form-data">
        Upload a File:
        <input type="file" name="myfile" id="fileToUpload" class="btn btn-info">
        <input type="submit" name="submit" class="btn btn-info" value="Upload File Now" >
</form>
<?php
    $currentDir = getcwd();
    $uploadDirectory = "/uploads/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png','mp4']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 

    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                
				echo "<span class='alert alert-success' style='padding:0px;'>The file " . basename($fileName) . " has been uploaded</span>" ;
            } else {
				echo "<span class='alert alert-danger' style='padding:0px;'>An error occurred somewhere. Try again or contact the admin</span>" ;
                   }
        } else {
            foreach ($errors as $error) {
                
				echo "<span class='alert alert-danger' style='padding:0px;'>$error . 'These are the errors' . '\n'</span>" ;
            }
        }
    }	
?>
</div>
</div>
<div class="col-md-6">
<p class="phead">PHP $_ ENV Gloabl Variable</p>
<div class="hidephp">
<span>
<strong>$_ ENV</strong> is a superglobal that contains environment variables. Environment variables are provided by the shell under which PHP is running, so they may vary according to different shells.
</span>
<pre>
&lt;?php
echo $_ENV["DATABASE_SERVER"];
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Need to write the examples and description for $_ENV GLOBAL Variable 
?>
</div>
</div>

</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">

<div class="col-md-6">
<p class="phead">PHP $_SESSION Gloabl Variable</p>
<div class="hidephp">
<span>
<strong>$_SESSION</strong> variables are stored in associative array called $_SESSION[]. These variables can be accessed during lifetime of a session.
</span>
<img src="assets/Images/Session.png" class="img-fluid" alt="Session Flow">
<pre>
&lt;?php
session_start();
if (!empty($_SESSION["member_name"])) {
$username =$_SESSION["member_name"];
echo $username;}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
if (!empty($_SESSION["member_name"])) 
{
$username =$_SESSION["member_name"];
echo $username;
}
?>
</div>
</div>

<div class="col-md-6">
<p class="phead">PHP $_COOKIE Gloabl Variable</p>
<div class="hidephp">
<span>
<strong>$_COOKIE</strong> is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
</span>
<img src="assets/Images/Cookies.png" class="img-fluid" alt="Session Flow">
<pre>
&lt;?php
if (! empty($_COOKIE["member_login"])) {
$username =$_COOKIE["member_login"];
echo $username;
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>
</div>
</div>

</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP Swapping Two Numbers</p>
<div class="hidephp">
<pre>
&lt;?php
$a = 100;  
$b = 50;  
// Swapping Logic  
$c = $a;  
$a = $b;  
$b = $c;  
echo "After swapping:";  
echo "a =".$a."  b=".$b;  
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
$a = 100;  
$b = 50;  
// Swapping Logic  
$c = $a;  
$a = $b;  
$b = $c; 
echo "After swapping:<br><br>";  
echo "a =".$a."  b=".$b;  
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Swapping Without using Third Variable (+ and -)</p>
<div class="hidephp">
<pre>
&lt;?php
$a=234;  
$b=345;  
//using arithmetic operation  
$a=$a+$b;  
$b=$a-$b;  
$a=$a-$b;  
echo "Value of a: $a";  
echo "Value of b: $b";   
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
$a=234;  
$b=345;  
//using arithmetic operation  
$a=$a+$b;  
$b=$a-$b;  
$a=$a-$b;  
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";    
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Swapping Without using Third Variable (* and /)</p>
<div class="hidephp">
<pre>
&lt;?php
$a=234;  
$b=345;  
// using arithmetic operation  
$a=$a*$b;  
$b=$a/$b;  
$a=$a/$b;  
echo "Value of a: $a";  
echo "Value of b: $b";    
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
$a=234;  
$b=345;  
// using arithmetic operation  
$a=$a*$b;  
$b=$a/$b;  
$a=$a/$b;  
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";      
?>
</div>
</div>
</div>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP Form Action</p>
<div class="hidephp">
<span><strong>Forms</strong> are used to get input from the user and submit it to the web server for processing.The <strong>action</strong> attribute is used to inform the browser what page (or script) to call once the "submit" button is pressed.</span>
<br><strong><code>&lt;form action="URL"&gt;</code></strong>
<img src="assets/Images/Form.png" class="img-fluid" alt="FormsAction Flow">
<pre>
&lt;?php
&lt;form action="/Login_Action.php" method="get"&gt;
  First name: &lt;input type="text" name="fname"&gt;
  Last name: &lt;input type="text" name="lname"&gt;
  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
?&gt;
</pre>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP Output in Textbox</p>
<div class="hidephp">
<pre>
&lt;?php
&lt;form method="post"&gt;
First Name:  &lt;input type="text" name="fname"/&gt;
Last Name:  &lt;input type="text" name="lname"/&gt;
&lt;input type="submit"  name="fullname" value="ADD"/&gt;
&lt;/form&gt;
error_reporting(0);
if (isset($_POST['fname']) && isset($_POST['fname']) ) {
$fname=$_POST['fname']; 
$lname=$_POST['lname']; 
$Fullname=$fname.$lname;
echo "FullName:<input type='text' class='form-control' value='$Fullname'/>"; 
} else {	
echo "User Name is empty";
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<form method="post" >
First Name:  <input type="text" class="form-control" name="fname" autocomplete="off"/>
Last Name:  <input type="text" class="form-control" name="lname" autocomplete="off"/>
<input type="submit" class="btn btn-info" name="fullname" value="ADD"/>
</form>
<?php
error_reporting(0);
if (isset($_POST['fname']) && isset($_POST['fname']) ) {
$fname=$_POST['fname']; 
$lname=$_POST['lname']; 
$Fullname=$fname.$lname;
echo "FullName:<input type='text' class='form-control' value='$Fullname'/>"; 
} else {	
echo "User Name is empty";
}
?>
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

