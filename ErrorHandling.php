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
    <title>Error Handle</title>

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
		<a class="dropdown-item" href="SqlInjection.php">Sql Injection</a>	
<a class="dropdown-item" href="DataGrids.php">DataGrids</a>		
		<a class="dropdown-item" href="ContactForm.php">Contact Form</a>	  
          <a class="dropdown-item" href="ReadingXml.php">Reading XML File</a>
          <a class="dropdown-item" href="ErrorHandling.php">Error Handling <span class="sr-only">(current)</span></a>
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

<div class="container-fluid" style="padding-top:1%;padding-bottom:5%;">
<span><strong>PHP Error & Exception handling : </strong></span><br>
<span>When an error occurs, depending on your configuration settings, PHP displays the error message in the web browser with information relating to the error that occurred.</span><br>
<span>PHP offers a number of ways to handle errors.</span>
<ul>
<li><strong>Die statements –</strong> the die function combines the echo and exit function in one. It is very useful when we want to output a message and stop the script execution when an error occurs.</li>
<li><strong>Custom error handlers – </strong>these are user defined functions that are called whenever an error occurs.</li>
<li><strong>PHP error reporting – </strong>the error message depending on your PHP error reporting settings. This method is very useful in development environment when you have no idea what caused the error. The information displayed can help you debug your application.</li>
</ul>
</li>
</ul>
<hr>
<div class="row">
<div class="col-md-6">
<p class="phead">using die() function</p>
<div class="hidephp">
<span>Using <strong>die()</strong> function you can stop your program whenever it errors out and display more meaningful and user friendly message.</span>
<pre>
&lt;?php
   if(!file_exists("/tmp/test.txt")) {
      die("File not found");
   }else {
      $file = fopen("/tmp/test.txt","r");
      print "Opend file sucessfully";
   }
?&gt;
</pre>
</div>
</div>
<div class="col-md-6">
<p class="phead">using echo function</p>
<div class="hidephp">
<span>Using <strong>echo</strong> you can display your user friendly message and continue your program flow.</span>
<pre>
&lt;?php
  $denominator = 0;
if ($denominator != 0) {
    echo 2 / $denominator;
} else {
    echo "cannot divide by zero (0)";
}
?&gt;
</pre>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6">
<p class="phead">Custom Error Handling Function</p>
<div class="hidephp">
<span>This function must be able to handle a minimum of two parameters <strong>(error level and error message)</strong> but can accept up to five parameters (optionally: file, line-number, and the error context)</span>
<br><strong>Syntax: </strong><code> error_function(error_level,error_message, error_file,error_line,error_context);</code>
<div>
                    <table>
                        <thead>
                            <tr>
                            	<th style="width:18%;">Parameter</th>
                            	<th style="padding-left:10%;">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>error_level</code></td>
                                <td style="padding-left:10%;"><strong>Required</strong> - Specifies the error report level for the user-defined error. Must be a value number.</td>
                            </tr>
                            <tr>
                                <td><code>error_message</code></td>
                                <td style="padding-left:10%;"><strong>Required</strong> - Specifies the error message for the user-defined error.</td>
                            </tr>
                            <tr>
                                <td><code>error_file</code></td>
                                <td style="padding-left:10%;"><strong>Optional</strong> - Specifies the file name in which the error occurred.</td>
                            </tr>
                            <tr>
                                <td><code>error_line</code></td>
                                <td style="padding-left:10%;"><strong>Optional</strong> - Specifies the line number in which the error occurred.</td>
                            </tr>
                            <tr>
                                <td><code>error_context</code></td>
                                <td style="padding-left:10%;"><strong>Optional</strong> - Specifies an array containing every variable and their values in use when the error occurred.</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
</div>
</div>
<div class="col-md-6">
<p class="phead">Possible Error levels</p>
<div class="hidephp">
<strong>Syntax: </strong> error_reporting ([ int $level ] ) : int
<strong>Example:</strong> error_reporting(E_ALL);
<br><span><strong>***</strong> The only way to show those errors is to modify your php.ini with this line: <code>display_errors = on</code></span>
<div>
                    <table>
                        <thead>
                            <tr>
                            	<th style="width:25%;">Constant</th>
                            	<th style="padding-left:10%;">Description</th>
								<th style="padding-left:10%;">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>.E_ERROR</code></td>
                                <td style="padding-left:10%;">Fatal run-time errors. Execution of the script is halted.</td>
								<td style="padding-left:10%;">1</td>
                            </tr>  
							<tr>
                                <td><code>E_WARNING</code></td>
                                <td style="padding-left:10%;">Non-fatal run-time errors. Execution of the script is not halted.</td>
								<td style="padding-left:10%;">2</td>
                            </tr> 
							<tr>
                                <td><code>E_PARSE</code></td>
                                <td style="padding-left:10%;">Compile-time parse errors. Parse errors should only be generated by the parser.</td>
								<td style="padding-left:10%;">4</td>
                            </tr> 
							<tr>
                                <td><code>E_NOTICE</code></td>
                                <td style="padding-left:10%;">Fatal errors that occur during PHP's initial start-up.</td>
								<td style="padding-left:10%;">8</td>
                            </tr> 
							<tr>
                                <td><code>E_CORE_ERROR</code></td>
                                <td style="padding-left:10%;">Fatal run-time errors. Execution of the script is halted.</td>
								<td style="padding-left:10%;">16</td>
                            </tr> 
							<tr>
                                <td><code>E_CORE_WARNING</code></td>
                                <td style="padding-left:10%;">Non-fatal run-time errors. This occurs during PHP's initial start-up.</td>
								<td style="padding-left:10%;">32</td>
                            </tr> 
							<tr>
                                <td><code>E_USER_ERROR</code></td>
                                <td style="padding-left:10%;">Non-fatal user-generated warning. This is like an E_WARNING set by the programmer using the PHP function trigger_error().</td>
								<td style="padding-left:10%;">256</td>
                            </tr> 
							<tr>
                                <td><code>E_USER_WARNING</code></td>
                                <td style="padding-left:10%;">Fatal run-time errors. Execution of the script is halted.</td>
								<td style="padding-left:10%;">512</td>
                            </tr> 
							<tr>
                                <td><code>E_USER_NOTICE</code></td>
                                <td style="padding-left:10%;">User-generated notice. This is like an E_NOTICE set by the programmer using the PHP function trigger_error().</td>
								<td style="padding-left:10%;">1024</td>
                            </tr> 
							<tr>
                                <td><code>E_STRICT</code></td>
                                <td style="padding-left:10%;">Run-time notices. Enable to have PHP suggest changes to your code which will ensure the best interoperability and forward compatibility of your code.</td>
								<td style="padding-left:10%;">2048</td>
                            </tr> 
							<tr>
                                <td><code>E_RECOVERABLE_ERROR</code></td>
                                <td style="padding-left:10%;">Catchable fatal error. This is like an E_ERROR but can be caught by a user defined handle (see also set_error_handler()).</td>
								<td style="padding-left:10%;">4096</td>
                            </tr> 
							<tr>
                                <td><code>E_ALL</code></td>
                                <td style="padding-left:10%;">All errors and warnings, except level E_STRICT (E_STRICT will be part of E_ALL as of PHP 6.0).</td>
								<td style="padding-left:10%;">8191</td>
                            </tr> 							
                        </tbody>
                    </table>
                </div>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6">
<p class="phead">PHP try catch</p>
<div class="hidephp">
<span>Handling errors in <strong>PHP</strong> with try catch blocks is almost the same as handling errors in other programming languages.</span>
<br><strong>Syntax:</strong>
<pre>
try {
    // run your code here
}
catch (exception $e) {
    //code to handle the exception
}
finally {
    //optional code that always runs
}
</pre>
</div>
</div>
<div class="col-md-6">
<p class="phead">PHP error handling keywords</p>
<div class="hidephp">
<span><strong>Try: </strong>The try block contains the code that may potentially throw an exception. All of the code within the try block is executed until an exception is potentially thrown.</span>
<br><span><strong>Throw:</strong>The throw keyword is used to signal the occurrence of a PHP exception. The PHP runtime will then try to find a catch statement to handle the exception.</span>
<br><span><strong>Catch:</strong>This block of code will be called only if an exception occurs within the try code block. The code within your catch statement must handle the exception that was thrown.</span>
<br><span><strong>Finally:</strong>The finally block may also be specified after or instead of catch blocks. Code within the finally block will always be executed after the try and catch blocks, regardless of whether an exception has been thrown, and before normal execution resumes. This is useful for scenarios like closing a <strong>database connection</strong> regardless if an exception occurred or not.</span>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6">
<p class="phead">PHP try catch with multiple exception types</p>
<div class="hidephp">
<span>PHP supports using <strong>multiple catch blocks</strong> within try catch. This allows us to customize our code based on the type of exception that was thrown. This is useful for customizing how you display an error message to a user, or if you should potentially retry something that failed the first time.</span>
<br><strong>Syntax:</strong>
<pre>
try {
    // run your code here
}
catch (Exception $e) {
    echo $e->getMessage();
}
catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
</pre>
</div>
</div>
<div class="col-md-6">
<p class="phead">When to use try catch-finally</p>
<div class="hidephp">
<span>Finally is useful for more than just exception handling, it is used to perform cleanup code such as closing a file, <strong>closing a database connection</strong>, etc.
The finally block always executes when the try catch block exits. This ensures that the finally block is executed even if an unexpected exception occurs.</span>
<strong>Example:</strong>
<pre>
try {
    print "this is our try block n";
    throw new Exception();
} catch (Exception $e) {
    print "something went wrong, caught yah! n";
} finally {
    print "this part is always executed n";
}
</pre>

<img src="assets/Images/TryCatch.webp" class="img-fluid" alt="Try Catch Flow">
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6">
<p class="phead">Creating custom PHP exception types</p>
<div class="hidephp">
<span>PHP also allows creating custom exception types.This can be useful for creating custom exceptions in your application that you can have special exception handling around.</span>
<br>
<span>To create a custom exception handler, we must create a special class with functions that can be called when an exception occurs. The class must be an extension of the <strong>exception</strong> class.</span>
<br><strong>Syntax:</strong>
<pre>
class DivideByZeroException extends Exception {};
</pre>
<span>The custom exception class inherits the properties from PHP’s <strong>Exception</strong> class and you can add custom functions to it. You may not want to display all the details of an exception to the user or you can display a user-friendly message and log the error message internally for monitoring.</span>
</div>
</div>
<div class="col-md-6">
<p class="phead">sample Custom PHP exception with multiple catch statements</p>
<div class="hidephp">
<span>
The code throws an exception and catches it with a <strong>custom exception class</strong>. The <strong>DivideByZeroException()</strong> and <strong>DivideByNegativeException()</strong> classes are created as extensions of the existing <strong>Exception class;</strong> this way, it inherits all methods and properties from the Exception class.
The <strong>“try”</strong> block is executed and an exception is thrown if the denominator is zero or negative number. The <strong>“catch”</strong> block catches the exception and displays the error message.
</span>
<pre>
class DivideByZeroException extends Exception {};
class DivideByNegativeException extends Exception {};

function process_divide($denominator)
{
    try
    {
        if ($denominator == 0)
        {
            throw new DivideByZeroException();
        }
        else if ($denominator < 0)
        {
            throw new DivideByNegativeException();
        }
        else
        {
            echo 100 / $denominator;
        }
    }
    catch (DivideByZeroException $ex)
    {
        echo "Divide by zero exception!";
    }
    catch (DivideByNegativeException $ex)
    {
        echo "Divide by negative number exception!";
    }
    catch (Exception $x)
    {
        echo "UNKNOWN EXCEPTION!";
    }
}
</pre>

<img src="assets/Images/CustomTryCatch.webp" class="img-fluid" alt="Custom Try Catch Flow">
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6">
<p class="phead">Global PHP exception handling</p>
<div class="hidephp">
<span>As a best practice, you should also configure a <strong>global PHP exception handler</strong>. It will be called in case an unhandled exception occurs that was not called in a proper PHP try catch block.</span>
<br>
<span>To configure a <strong>global PHP exception handler</strong>, we will use the set_exception_handler() function to set a user-defined function to handle all uncaught exceptions</span>
<br><strong>Syntax:</strong>
<pre>
function our_global_exception_handler($exception) {
    //this code should log the exception to disk and an error tracking system
    echo "Exception:" . $exception->getMessage();
}

set_exception_handler(‘our_global_exception_handler’);
</pre>
</div>
</div>
<div class="col-md-6">
<p class="phead">try catch with MySQL</p>
<div class="hidephp">
<span>The PHP libraries for <strong>MySQL</strong>, <strong>PDO</strong>, and <strong>mysqli</strong>, have different modes for error handling.</span>
<br>
<strong>Syntax (PDO):</strong>
<pre>
// connect to MySQL
$conn = new PDO('mysql:host=localhost;dbname=sampledb;charset=utf8mb4','username', 'password');
//PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
</pre>
<strong>ATTR_CASE:</strong>
<div>
<table>
<thead>
<tr>
<th>PDO::ATTR_CASE:</th>
<th style="padding-left:8px;">Force column names to a specific case.</th>
</tr>
</thead>
<tbody>                           
<tr>
<td><code>PDO::CASE_LOWER:</code></td>
<td>Force column names to lower case.</td>
</tr>
<tr>
<td><code>PDO::CASE_UPPER:</code></td>
<td>Force column names to upper case.</td>
</tr>
<tr>
<td><code>PDO::CASE_NATURAL:</code></td>
<td>Leave column names as returned by the database driver.</td>
</tr>                            
</tbody>
</table>
</div>
<strong>ATTR_ERRMODE:</strong>
<div>
<table>
<thead>
<tr>
<th>PDO::ATTR_ERRMODE:</th>
<th style="padding-left:8px;">Error reporting.</th>
</tr>
</thead>
<tbody>                           
<tr>
<td><code>PDO::ERRMODE_SILENT:</code></td>
<td>Just set error codes.</td>
</tr>
<tr>
<td><code>PDO::ERRMODE_WARNING:</code></td>
<td>Raise E_WARNING.</td>
</tr>
<tr>
<td><code>PDO::ERRMODE_EXCEPTION:</code></td>
<td>Throw exceptions.</td>
</tr>                            
</tbody>
</table>
</div>

<strong>Example:</strong>
<pre>
&lt;?php
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,    
];

// Now you create your connection string
try {
    // Then pass the options as the last parameter in the connection string
    $connection = new PDO("mysql:host=$host; dbname=$dbname", $user, $password, $options);

    // That's how you can set multiple attributes
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?&gt;
</pre>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6">
<p class="phead">try catch with MySQL</p>
<div class="hidephp">
<span>The PHP libraries for <strong>MySQL</strong>, <strong>PDO</strong>, and <strong>mysqli</strong>, have different modes for error handling.</span>
<br>
<strong>Syntax (mysqli):</strong>
<pre>
&lt;?php
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?&gt;
</pre>
<strong>Description:</strong>

<div>
<table>
<thead>
<tr>
<th style="width:30%;">Name</th>
<th style="padding-left:8px;">Description</th>
</tr>
</thead>
<tbody>                           
<tr>
<td><code>MYSQLI_REPORT_OFF</code></td>
<td>Turns reporting off</td>
</tr>
<tr>
<td><code>MYSQLI_REPORT_ERROR</code></td>
<td>Report errors from mysqli function calls</td>
</tr>
<tr>
<td><code>MYSQLI_REPORT_STRICT</code></td>
<td>Throw mysqli_sql_exception for errors instead of warnings</td>
</tr>   
<tr>
<td><code>MYSQLI_REPORT_INDEX</code></td>
<td>Report if no index or bad index was used in a query</td>
</tr>   
<tr>
<td><code>MYSQLI_REPORT_ALL</code></td>
<td>Set all options (report all)</td>
</tr>                            
</tbody>
</table>
</div>
<strong>Example-Object oriented style:</strong>
<pre>
&lt;?php

$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* activate reporting */
$driver = new mysqli_driver();
$driver->report_mode = MYSQLI_REPORT_ALL;

try {

    /* this query should report an error */
    $result = $mysqli->query("SELECT Name FROM Nonexistingtable WHERE population > 50000");

    /* this query should report a bad index */
    $result = $mysqli->query("SELECT Name FROM City WHERE population > 50000");

    $result->close();

    $mysqli->close();

} catch (mysqli_sql_exception $e) {

    echo $e->__toString();
}
?&gt;
</pre>

<strong>Example-Procedural style:</strong>
<pre>
&lt;?php
/* activate reporting */
mysqli_report(MYSQLI_REPORT_ALL);

$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* this query should report an error */
$result = mysqli_query("SELECT Name FROM Nonexistingtable WHERE population > 50000");

/* this query should report a bad index */
$result = mysqli_query("SELECT Name FROM City WHERE population > 50000");

mysqli_free_result($result);

mysqli_close($link);
?&gt;
</pre>

</div>
</div>
<div class="col-md-6">
<p class="phead">Difference between Errors and Exception</p>
<div class="hidephp">
<ul>
<li>Exceptions are thrown and intended to be caught while errors are generally irrecoverable.</li>
<li>Exceptions are handled in an object oriented way.</li>
<li>This means when an exception is thrown; an exception object is created that contains the exception details.</li>
</ul>
<strong>Description:</strong>
<div>
<table>
<thead>
<tr>
<th style="width:30%;">Method</th>
<th style="padding-left:8px;">Description</th>
<th style="padding-left:8px;">Example</th>
</tr>
</thead>
<tbody>                           
<tr>
<td><code>getMessage()</code></td>
<td>Displays the exception’s message</td>
<td><pre>
&lt;?php
echo $e->getMessage();
?&gt;
</pre>
</td>
</tr>

<tr>
<td><code>getCode()</code></td>
<td>Displays the numeric code that represents the exception</td>
<td><pre>
&lt;?php
echo $e->getCode();
?&gt;
</pre>
</td>
</tr>

<tr>
<td><code>getFile()</code></td>
<td>Displays the file name and path where the exception occurred</td>
<td><pre>
&lt;?php
echo $e->getFile();
?&gt;
</pre>
</td>
</tr>

<tr>
<td><code>getLine()</code></td>
<td>Displays the file name and path where the exception occurred</td>
<td><pre>
&lt;?php
echo $e->getLine();
?&gt;
</pre>
</td>
</tr>

<tr>
<td><code>getTrace()</code></td>
<td>Displays an array of the backtrace before the exception</td>
<td><pre>
&lt;?php
print_r( $e->getTrace());
?&gt;
</pre>
</td>
</tr>

<tr>
<td><code>getPrevious()</code></td>
<td>Displays the previous exception before the current one</td>
<td><pre>
&lt;?php
echo $e->getPrevious();
?&gt;
</pre>
</td>
</tr>

<tr>
<td><code>getTraceAsString()</code></td>
<td>Displays the backtrace of the exception as a string instead of an array</td>
<td><pre>
&lt;?php
echo $e->getTraceAsString();
?&gt;
</pre>
</td>
</tr>

<tr>
<td><code>__toString()</code></td>
<td>Displays the entire exception as a string</td>
<td><pre>
&lt;?php
echo $e->__toString();
?&gt;
</pre>
</td>
</tr>  
                         
</tbody>
</table>
</div>
<strong>Basic syntax for throwing an exception.</strong>
<pre>
&lt;?php
throw new Exception("This is an exception example");
?&gt;
</pre>
<span>Here,</span>
<ul>
<li><strong>“throw”</strong> is the keyword used to throw the exception</li>
<li><strong>“new Exception(…)”</strong> creates an exception object and passes “This is an exception example “ string as the message parameter.</li>
</ul>
<strong>Output:</strong>
<img src="assets/images/uncaught_exception.png" class="img-fluid" alt="exception error image">
<span>Now we modify the code and include the try, throw and catch.</span>
<pre>
&lt;?php
try {
    //code goes here that could potentially throw an exception
}
catch (Exception $e) {
    //exception handling code goes here
}
?&gt;
</pre>
<span>Here,</span>
<ul>
<li><strong>“try{…}”</strong> is the block of code to be executed that could potentially raise an exception</li>
<li><strong>“catch(Exception $e){…}”</strong> is the block of code that catches the thrown exception and assigns the exception object to the variable $e.</li>
</ul>
<span>Program to explain the try, throw and catch exception</span>
<pre>
&lt;?php
try {
    $var_msg = "This is an exception example";
    throw new Exception($var_msg);
}
catch (Exception $e) {
    echo "Message: " . $e->getMessage();
    echo "";
    echo "getCode(): " . $e->getCode();
    echo "";
    echo "__toString(): " . $e->__toString();
}
?&gt;
</pre>
<strong>Output:</strong>
<img src="assets/images/exception_info.png" class="img-fluid" alt="exception error image">
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
