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
    <title>PHP Basic</title>

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
        <a class="nav-link" href="Basic.php">Basic<span class="sr-only">(current)</span></a>
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
    <h1 class="display-4" style="font-weight:400;">Welcome, to Core PHP Basics!</h1>
    <p class="lead" style="font-weight:400;">PHP is the most popular server-side scripting language for creating dynamic web pages.</p>
  </div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-3" id = "PHPcode">
<p class="phead">PHP Syntax</p>
<div class="hidephp">
<pre>
&lt;?php
// PHP code goes here
?&gt;
</pre>
</div>
</div>
<div class="col-md-6">
<p class="phead">PHP Comments</p>
<div class="hidephp">
<pre>
&lt;?php
echo 'Welcome to Core PHP'; // This is a one-line PHP style comment
/* This is a multi line comment
yet another line of comment */
echo 'This is multi line text';
echo 'Final Text'; # This is a one-line shell-style comment
?&gt;
</pre>
</div>
</div>
<div class="col-md-3">
<p class="phead">PHP Variables:</p>
<div class="hidephp">
<pre>
&lt;?php
$text = "Welcome to Core PHP";
$x = 5;
$y = 7;
echo $text;
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$text = "Welcome to Core PHP";
echo $text;
?>
</div>
</div>
</div>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<p class="phead">PHP echo/print</p>
<div class="hidephp">
<pre>
&lt;?php
echo "Welcome to Core PHP";
echo "<strong>Html in PHP!</strong>";
print "Welcome to Core PHP";
print "<strong>Html in PHP!</strong>";
?&gt;
</pre>
</div>
</div>
<div class="col-md-8">
<p class="phead">PHP extract() Function</p>
<div class="hidephp">
<pre>
&lt;?php
$Language = "C#";
$my_array = array("Language" => "PHP","Version" => "5", "ScriptingType" => "Server Side Script");
extract($my_array);
echo "\$Language = $Language; \$Version = $Version; \$ScriptingType = $ScriptingType";
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$Language = "C#";
$my_array = array("Language" => "PHP","Version" => "5", "ScriptingType" => "Server Side Script");
extract($my_array);
echo "\$Language = $Language; <br> \$Version = $Version; <br> \$ScriptingType = $ScriptingType";
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP Constant</p>
<div class="hidephp">
<pre>
&lt;?php
// Defining constant
define("SITE_URL", "https://www.google.com/");
// Using constant
echo 'Thank you for visiting - ' . SITE_URL;
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
// Defining constant
define("SITE_URL", "https://www.google.com/");
// Using constant
echo 'Thank you for visiting - <strong>' .SITE_URL .'</strong>';
?>
</div>
</div>
<div class="col-md-4">
<p class="phead">PHP var_dump()</p>
<div class="hidephp">
<pre>
&lt;?php
$a = 5;
$b = 3.1;
$c = true;
$d = 'PHP';
var_dump($a, $b, $c, $d);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$a = 5;
$b = 3.1;
$c = true;
$d = 'PHP';
var_dump($a); echo '<br/>';
var_dump($b); echo '<br/>';
var_dump($c); echo '<br/>';
var_dump($d); echo '<br/>';
?>
</div>
</div>
<div class="col-md-4">
<p class="phead">PHP highlight_string()</p>
<div class="hidephp">
<pre>
&lt;?php
highlight_string("Welcome to <?php echo 'PHP 5'; ?>");
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
highlight_string("Welcome to <?php echo 'PHP 5'; ?>");
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP Integers</p>
<div class="hidephp">
<pre>
&lt;?php
$a = 123; // decimal number
var_dump($a);
$b = -123; // a negative number
var_dump($b);
$c = 0x1A; // hexadecimal number
var_dump($c); 
$d = 0123; // octal number
var_dump($d);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$a = 123; echo '<br/>';
var_dump($a);
$b = -123; echo '<br/>';
var_dump($b);
$c = 0x1A; echo '<br/>';
var_dump($c); 
$d = 0123; echo '<br/>';
var_dump($d);
?>
</div>
</div>
<div class="col-md-4">
<p class="phead">PHP Strings</p>
<div class="hidephp">
<pre>
&lt;?php
$a = 'Welcome to Core PHP!';
echo $a;
 
$b = "Welcome to Core PHP!";
echo $b;
 
$c = 'Stay here, I\'ll be back.';
echo $c;
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$a = 'Welcome to Core PHP!';
echo $a; echo '<br/>';
 
$b = "Welcome to Core PHP!";
echo $b; echo '<br/>';
 
$c = 'Stay here, I\'ll be back.';
echo $c;
?>
</div>
</div>
<div class="col-md-4">
<p class="phead">PHP Float/Decimal</p>
<div class="hidephp">
<pre>
&lt;?php
$a = 1.234;
var_dump($a);
 
$b = 10.2e3;
var_dump($b);
 
$c = 4E-10;
var_dump($c);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$a = 1.234;
var_dump($a);echo '<br/>';
 
$b = 10.2e3;
var_dump($b);echo '<br/>';
 
$c = 4E-10;
var_dump($c);
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP Booleans</p>
<div class="hidephp">
<pre>
&lt;?php
$a = 15;
$b = 18;
if ($a > $b)
$c = true;
else
$c= false;
var_dump($c);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$a = 15;
$b = 18;
if ($a > $b)
$c = true;
else
	$c= false;
var_dump($c);
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP Arrays</p>
<div class="hidephp">
<pre>
&lt;?php
$languages = array("PHP", "Bootstrap", "jQuery");
var_dump($languages);
$languages_Versions = array(
"PHP" => "5",
"Bootstrap" => "4",
"jQuery" => "3.1.1"
);
var_dump($languages_Versions);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$languages = array("PHP", "Bootstrap", "jQuery");
var_dump($languages);
echo "<br>";

$languages_Versions = array(
"PHP" => "5",
"Bootstrap" => "4",
"jQuery" => "3.1.1"
);
var_dump($languages_Versions);
?>
</div>
</div>
<div class="col-md-4">
<p class="phead">PHP Objects</p>
<div class="hidephp">
<pre>
&lt;?php
// Class definition
class message{
// properties
public $msg = "Welcome to PHP!";

// methods
function show_message(){
return $this->$msg;
}
}

// Create object from class
$messageoutout = new message;
var_dump($messageoutout);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
// Class definition
class message{
// properties
public $msg = "Welcome to PHP!";

// methods
function show_message(){
return $this->$msg;
}
}

// Create object from class
$messageoutout = new message;
var_dump($messageoutout);
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP NULL</p>
<div class="hidephp">
<pre>
&lt;?php
$a = NULL;
var_dump($a);
$b = "Welcome To Core PHP!";
$b = NULL;
var_dump($b);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$a = NULL;
var_dump($a); echo '<br/>';
$b = "Welcome To Core PHP!";
$b = NULL;
var_dump($b);
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP Strings</p>
<div class="hidephp">
<pre>
&lt;?php
$my_str = 'PHP';
echo "Welcome, $my_str!";
echo 'Welcome, $my_str!';
echo 'Welcome\tPHP!'; 
echo "Welcome\tPHP!";
echo 'I\'ll be back';
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$my_str = 'PHP';
$my_str = 'PHP';
echo "Welcome, $my_str! <br>";
echo 'Welcome, $my_str! <br>';
echo 'Welcome\tPHP! <br>'; 
echo "Welcome\tPHP!";
echo 'I\'ll be back';
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Calculating the Length of a String</p>
<div class="hidephp">
<pre>
&lt;?php
$title = 'Welcome to Core PHP';
echo strlen($title);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$title = 'Welcome to Core PHP';
echo strlen($title);
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">Counting Number of Words in a String</p>
<div class="hidephp">
<pre>
&lt;?php
$title = 'Welcome to Core PHP';
echo str_word_count($title);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$title = 'Welcome to Core PHP';
echo str_word_count($title);
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Replacing Text within Strings</p>
<div class="hidephp">
<pre>
&lt;?php
$my_str = 'Welcome to Java';
 
// Display replaced string
echo str_replace("Java", "PHP", $my_str);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$my_str = 'Welcome to Java';
 
// Display replaced string
echo str_replace("Java", "PHP", $my_str);
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Reversing a String</p>
<div class="hidephp">
<pre>
&lt;?php
$title = 'Welcome to Core PHP';
echo strrev($title);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$title = 'Welcome to Core PHP';
echo strrev($title);
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP Arithmetic Operators</p>
<div class="hidephp">
<pre>
&lt;?php
$x = 10;
$y = 4;
echo($x + $y);
echo($x - $y);
echo($x * $y);
echo($x / $y);
echo($x % $y);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$x = 10;
$y = 4;
echo($x + $y .'<br>'); 
echo($x - $y .'<br>'); 
echo($x * $y .'<br>'); 
echo($x / $y .'<br>'); 
echo($x % $y .'<br>'); 
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP Assignment Operators</p>
<div class="hidephp">
<pre>
&lt;?php
$x = 10;
echo $x; 
$x = 20;
$x += 30;
echo $x; 
$x = 50;
$x -= 20;
echo $x; 
$x = 5;
$x *= 25;
echo $x; 
$x = 50;
$x /= 10;
echo $x; 
$x = 100;
$x %= 15;
echo $x;
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$x = 10;
echo $x.'<br>'; 
$x = 20;
$x += 30;
echo $x .'<br>'; 
$x = 50;
$x -= 20;
echo $x .'<br>'; 
$x = 5;
$x *= 25;
echo $x .'<br>'; 
$x = 50;
$x /= 10;
echo $x .'<br>'; 
$x = 100;
$x %= 15;
echo $x .'<br>';
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP Comparison Operators</p>
<div class="hidephp">
<pre>
&lt;?php
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z); 
var_dump($x === $z);
var_dump($x != $y); 
var_dump($x !== $z);
var_dump($x < $y);  
var_dump($x > $y);  
var_dump($x <= $y); 
var_dump($x >= $y); 
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z); echo '<br/>';
var_dump($x === $z);echo '<br/>';
var_dump($x != $y); echo '<br/>';
var_dump($x !== $z);echo '<br/>';
var_dump($x < $y);  echo '<br/>';
var_dump($x > $y);  echo '<br/>';
var_dump($x <= $y); echo '<br/>';
var_dump($x >= $y); echo '<br/>';
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP Incrementing Operators</p>
<div class="hidephp">
<pre>
&lt;?php
$x = 10;
echo ++$x; 
echo $x;  
$x = 10;
echo $x++; 
echo $x;   
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$x = 10;
echo ++$x .'<br>';
echo $x .'<br>';
$x = 10;
echo $x++ .'<br>';
echo $x .'<br>'; 
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP Decrementing Operators</p>
<div class="hidephp">
<pre>
&lt;?php
$x = 10;
echo --$x; 
echo $x;  
$x = 10;
echo $x--; 
echo $x;   
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$x = 10;
echo --$x .'<br>';
echo $x .'<br>';
$x = 10;
echo $x-- .'<br>';
echo $x .'<br>'; 
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP Logical Operators</p>
<div class="hidephp">
<pre>
&lt;?php
$year = 2014;
if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    echo "$year is a leap year.";
} else{
    echo "$year is not a leap year.";
}  
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$year = 2014;
if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    echo "$year is a leap year.";
} else{
    echo "$year is not a leap year.";
}
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP String Operators</p>
<div class="hidephp">
<pre>
&lt;?php
$x = "Welcome to ";
$y = " Core PHP!";
echo $x . $y; 
$x .= $y;
echo $x; 
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$x = "Welcome to ";
$y = " Core PHP!";
echo $x . $y . '<br>'; 
$x .= $y;
echo $x; 
?>
</div>
</div>

<div class="col-md-7">
<p class="phead">PHP Array Operators</p>
<div class="hidephp">
<pre>
&lt;?php
$server = array("Server" => "PHP", "Server" => "Dot.net", "Server" => "Java");
$client = array("client" => "HTML", "client" => "JavaScript", "client" => "jQuery");
$technalogy = $x + $y; // Union of $x and $y
var_dump($z);
var_dump($x == $y);  
var_dump($x === $y); 
var_dump($x != $y);  
var_dump($x <> $y);  
var_dump($x !== $y); 
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$server = array("Server" => "PHP", "Server" => "Dot.net", "Server" => "Java");
$client = array("client" => "HTML", "client" => "JavaScript", "client" => "jQuery");
$technalogy = $x + $y; // Union of $x and $y
var_dump($z); echo '<br>'; 
var_dump($x == $y); echo '<br>'; 
var_dump($x === $y); echo '<br>'; 
var_dump($x != $y);  echo '<br>'; 
var_dump($x <> $y);  echo '<br>'; 
var_dump($x !== $y); echo '<br>'; 
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP if...elseif...else Statements</p>
<div class="hidephp">
<pre>
&lt;?php
$d = date("D");
if($d == "Fri"){
    echo "Have a nice Friday!";
} elseif($d == "Sun"){
    echo "Have a nice Sunday!";
} else{
    echo "Have a nice day!";
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$d = date("D");
if($d == "Fri"){
    echo "Have a nice Friday!";
} elseif($d == "Sun"){
    echo "Have a nice Sunday!";
} else{
    echo "Have a nice day!";
} 
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP Tinary Operator</p>
<div class="hidephp">
<pre>
&lt;?php
$age = 20;
if($age < 18){
    echo 'Not Eligible to Vote';
} else{
    echo 'Eligible To Vote';
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$age = 20;
if($age < 18){
    echo 'Not Eligible to Vote';
} else{
    echo 'Eligible To Vote';
}
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP Switch Statements</p>
<div class="hidephp">
<pre>
&lt;?php
$today = date("D");
switch($today){
case "Mon":
echo "Today is Monday. Clean your house.";
break;
case "Tue":
echo "Today is Tuesday. Buy some food.";
break;
case "Wed":
echo "Today is Wednesday. Visit a doctor.";
break;
case "Thu":
echo "Today is Thursday. Repair your car.";
break;
case "Fri":
echo "Today is Friday. Party tonight.";
break;
case "Sat":
echo "Today is Saturday. Its movie time.";
break;
case "Sun":
echo "Today is Sunday. Do some rest.";
break;
default:
echo "No information available for that day.";
break;
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday. Clean your house.";
        break;
    case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some rest.";
        break;
    default:
        echo "No information available for that day.";
        break;
}
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP while Loop</p>
<div class="hidephp">
<pre>
&lt;?php
$i = 1;
while($i <= 3){
    $i++;
    echo "The number is " . $i . "<br>";
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$i = 1;
while($i <= 3){
    $i++;
    echo "The number is " . $i . "<br>";
} 
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP do…while Loop</p>
<div class="hidephp">
<pre>
&lt;?php
$i = 1;
do{
    $i++;
    echo "The number is " . $i . "<br>";
}
while($i <= 3);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$i = 1;
do{
    $i++;
    echo "The number is " . $i . "<br>";
}
while($i <= 3);
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP for Loop</p>
<div class="hidephp">
<pre>
&lt;?php
for(initialization; condition; increment){
    // Code to be executed
}

for($i=1; $i<=3; $i++){
    echo "The number is " . $i . "<br>";
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
for($i=1; $i<=3; $i++){
    echo "The number is " . $i . "<br>";
}
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">PHP foreach Loop</p>
<div class="hidephp">
<pre>
&lt;?php
$PHP = array(
    "Technalogy" => "PHP",
    "version" => "5",
    "Invented" => "Rasmus Lerdorf",
	"FullForm" => "Hypertext Preprocessor"
);
 
// Loop through superhero array
foreach($PHP as $key => $value){
    echo $key . " : " . $value . "<br>";
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
$PHP = array(
    "Technalogy" => "PHP",
    "version" => "5",
    "Invented" => "Rasmus Lerdorf",
	"FullForm" => "Hypertext Preprocessor"
);
 
// Loop through superhero array
foreach($PHP as $key => $value){
    echo $key . " : " . $value . "<br>";
}
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">PHP Math Operations</p>
<div class="hidephp">
<pre>
&lt;?php
echo 7 + 3; 
echo 7 - 2; 
echo 7 * 2; 
echo 7 / 2; 
echo 7 % 2; 
echo 5 + 4 * 10;
echo (5 + 4) * 10;
echo 5 + 4 * 10 / 2;
echo 8 * 10 / 4 - 2;
echo 8 * 10 / (4 - 2);
echo 8 + 10 / 4 - 2;
echo (8 + 10) / (4 - 2);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
echo 7 + 3;echo '<br>' ;
echo 7 - 2;echo '<br>' ; 
echo 7 * 2; echo '<br>' ;
echo 7 / 2; echo '<br>' ;
echo 7 % 2; echo '<br>' ;
echo 5 + 4 * 10;echo '<br>' ;
echo (5 + 4) * 10;echo '<br>' ;
echo 5 + 4 * 10 / 2;echo '<br>' ;
echo 8 * 10 / 4 - 2;echo '<br>' ;
echo 8 * 10 / (4 - 2);echo '<br>' ;
echo 8 + 10 / 4 - 2;echo '<br>' ;
echo (8 + 10) / (4 - 2);echo '<br>' ;
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Absolute Value of a Number</p>
<div class="hidephp">
<pre>
&lt;?php
// Absolute Value of a Number
echo abs(5);
echo abs(-5);
echo abs(4.2);
echo abs(-4.2);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php 
echo abs(5).'<br>';
echo abs(-5).'<br>';
echo abs(4.2).'<br>';
echo abs(-4.2).'<br>';
?>
</div>
</div>
</div>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">Round a Fractional Value</p>
<div class="hidephp">
<pre>
&lt;?php
// Round a Fractional Value Up or Down
echo ceil(4.2);
echo ceil(9.99);
echo ceil(-5.18);
echo floor(4.2);
echo floor(9.99);
echo floor(-5.18);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
echo ceil(4.2).'<br>';
echo ceil(9.99).'<br>';
echo ceil(-5.18).'<br>';
echo floor(4.2).'<br>';
echo floor(9.99).'<br>';
echo floor(-5.18).'<br>';
?>
</div>
</div>
<div class="col-md-4">
<p class="phead">Square Root of a Number</p>
<div class="hidephp">
<pre>
&lt;?php
// Find the Square Root of a Number
echo sqrt(9);
echo sqrt(25);
echo sqrt(10);
echo sqrt(-16);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
echo sqrt(9).'<br>';
echo sqrt(25).'<br>';
echo sqrt(10).'<br>';
echo sqrt(-16).'<br>';
?>
</div>
</div>
<div class="col-md-4">
<p class="phead">Generate a Random Number</p>
<div class="hidephp">
<pre>
&lt;?php
// Generate a Random Number
echo rand();
echo rand();
echo rand(1, 10);
echo rand(1, 10);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
echo rand().'<br>';
echo rand().'<br>';
echo rand(1, 10).'<br>';
echo rand(1, 10);
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">Convert Decimal to Binary</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert Decimal to Binary 
echo decbin(2);
echo decbin(12);
echo decbin(100);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
echo decbin(2).'<br>';
echo decbin(12) . '<br>';
echo decbin(100) . '<br>';
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Convert Binary to Decimal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert Binary to Decimal
echo bindec(10);
echo bindec(1100);
echo bindec(1100100);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
echo bindec(10).'<br>';
echo bindec(1100).'<br>';
echo bindec(1100100).'<br>';
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Convert decimal to hexadecimal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert decimal to hexadecimal 
echo dechex(255);
echo dechex(196);
echo dechex(0); 
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
echo dechex(255).'<br>';
echo dechex(196).'<br>';
echo dechex(0).'<br>';
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">Convert hexadecimal to decimal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert hexadecimal to decimal
echo hexdec('ff');
echo hexdec('c4');
echo hexdec(0);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
echo hexdec('ff').'<br>';
echo hexdec('c4').'<br>';
echo hexdec(0).'<br>';
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Convert decimal to octal </p>
<div class="hidephp">
<pre>
&lt;?php
// Convert decimal to octal 
echo decoct(12);
echo decoct(256);
echo decoct(77);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
echo decoct(12).'<br>';
echo decoct(256).'<br>';
echo decoct(77).'<br>';
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Convert octal to decimal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert octal to decimal
echo octdec('14');
echo octdec('400');
echo octdec('115');
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
echo octdec('14').'<br>';
echo octdec('400').'<br>';
echo octdec('115').'<br>';
?>
</div>
</div>
</div>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">Convert decimal to binary</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert decimal to binary
echo base_convert('c2c6a8', 16, 8);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert decimal to binary
echo base_convert('c2c6a8', 16, 8);
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Convert binary to decimal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert binary to decimal
echo base_convert('1100', 2, 10);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert binary to decimal
echo base_convert('1100', 2, 10);
?>
</div>
</div>
	
<div class="col-md-4">
<p class="phead">Convert decimal to hexadecimal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert decimal to hexadecimal
echo base_convert('10889592', 10, 16);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert decimal to hexadecimal
echo base_convert('10889592', 10, 16);
?>
</div>
</div>
</div>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">Convert hexadecimal to decimal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert hexadecimal to decimal
echo base_convert('a62978', 16, 10);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert hexadecimal to decimal
echo base_convert('a62978', 16, 10);
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Convert decimal to octal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert decimal to octal
echo base_convert('82', 10, 8);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert binary to decimal
echo base_convert('1100', 2, 10);
?>
</div>
</div>	
	
<div class="col-md-4">
<p class="phead">Convert octal to decimal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert octal to decimal
echo base_convert('122', 8, 10);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert octal to decimal
echo base_convert('122', 8, 10);
?>
</div>
</div>
</div>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">Convert hexadecimal to octal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert hexadecimal to octal
echo base_convert('c2c6a8', 16, 8);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert hexadecimal to octal
echo base_convert('c2c6a8', 16, 8);
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Convert octal to hexadecimal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert octal to hexadecimal
echo base_convert('60543250', 8, 16); 
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert octal to hexadecimal
echo base_convert('60543250', 8, 16); 
?>
</div>
</div>
	
<div class="col-md-4">
<p class="phead">Convert octal to binary</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert octal to binary
echo base_convert('42', 8, 2);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert octal to binary
echo base_convert('42', 8, 2);
?>
</div>
</div>
</div>
</div>
<hr>


<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<p class="phead">Convert binary to octal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert binary to octal
echo base_convert('100010', 2, 8);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert binary to octal
echo base_convert('100010', 2, 8);
?>
</div>
</div>

<div class="col-md-4">
<p class="phead">Convert hexadecimal to binary</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert hexadecimal to binary
echo base_convert('abc', 16, 2);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert hexadecimal to binary
echo base_convert('abc', 16, 2);
?>
</div>
</div>
	
<div class="col-md-4">
<p class="phead">Convert binary to hexadecimal</p>
<div class="hidephp">
<pre>
&lt;?php
// Convert binary to hexadecimal
echo base_convert('101010111100', 2, 16);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Convert binary to hexadecimal
echo base_convert('101010111100', 2, 16);
?>
</div>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<p class="phead">Functions in PHP</p>
<div class="hidephp">
<span>
A <strong>function</strong> is a self-contained block of code that performs a specific task.
PHP has a huge collection of internal or built-in functions that you can call directly within your PHP scripts to perform a specific task, like <strong>gettype()</strong>, <strong>print_r()</strong>, <strong>var_dump</strong>, etc.
</span>
<ul>
<li>Functions reduces the repetition of code within a program</li>
<li>Functions makes the code much easier to maintain</li>
<li>Functions can be reused in other application</li>
</ul>
<strong>Syntax:</strong>
<code>
function functionName(){
    // Code to be executed
}
</code>
<pre>
&lt;?php
// Defining function
function whatIsToday(){
    echo "Today is " . date('l', mktime());
}
// Calling function
whatIsToday();
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Defining function
function whatIsToday(){
    echo "Today is " . date('l', mktime());
}
// Calling function
whatIsToday();
?>
</div>
</div>

<div class="col-md-6">
<p class="phead">Functions with Parameters</p>
<div class="hidephp">
<span>
You can specify parameters when you define your function to accept input values at run time. 
</span><br>
<strong>Syntax:</strong>
<code>
function functionName(){
    // Code to be executed
}
</code>
<pre>
&lt;?php
// Defining function
function getSum($num1, $num2){
  $sum = $num1 + $num2;
  echo "Sum of the two numbers $num1 and $num2 is : $sum";
}
 
// Calling function
getSum(10, 20);
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Defining function
function getSum($num1, $num2){
  $sum = $num1 + $num2;
  echo "Sum of the two numbers $num1 and $num2 is : $sum";
}
 
// Calling function
getSum(10, 20);
?>
</div>
</div>

</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<p class="phead">Functions with Optional Parameters and Default Values</p>
<div class="hidephp">
<span>
just insert the parameter name, followed by an equals <strong> (=) </strong> sign, followed by a default value.
</span>
<pre>
&lt;?php
// Defining function
function customFont($font, $size=1.5){
    echo "<p style=\"font-family: $font; font-size: {$size}em;\">Welcome to Core PHP!</p>";
}
 
// Calling function
customFont("Arial", 2);
customFont("Times", 3);
customFont("Courier");
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Defining function
function customFont($font, $size=1.5){
    echo "<p style=\"font-family: $font; font-size: {$size}em;\">Welcome to Core PHP!</p>";
}
 
// Calling function
customFont("Arial", 2);
customFont("Times", 3);
customFont("Courier");
?>
</div>
</div>

<div class="col-md-6">
<p class="phead">Returning Values from a Function</p>
<div class="hidephp">
<span>
A function can return a value back to the script that called the function using the return statement. 
</span>
<pre>
&lt;?php
// Defining function
function getTotal($num1, $num2){
    $total = $num1 + $num2;
    return $total;
}
 
// Printing returned value
echo getTotal(15, 25); 
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Defining function
function getTotal($num1, $num2){
    $total = $num1 + $num2;
    return $total;
}
 
// Printing returned value
echo getTotal(15, 25); 
?>
</div>
</div>

</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<p class="phead">Passing Arguments to a Function by Reference</p>
<div class="hidephp">
<span>
To allow a function to modify its arguments, they must be passed by reference.
Passing an argument by reference is done by prepending an <strong>ampersand (&) </strong> to the argument name in the function.
</span>
<pre>
&lt;?php
/* Defining a function that multiply a number by itself and return the
 new value */
function selfMultiply(&$number){
    $number *= $number;
    return $number;
}
 
$mynum = 5;
echo $mynum; 
 
selfMultiply($mynum);
echo $mynum; 
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
/* Defining a function that multiply a number
by itself and return the new value */
function selfMultiply(&$number){
    $number *= $number;
    return $number;
}
 
$mynum = 5;
echo $mynum; // Outputs: 5
 
selfMultiply($mynum);
echo $mynum; // Outputs: 25
?>
</div>
</div>

<div class="col-md-6">
<p class="phead">Understanding the Variable Scope</p>
<div class="hidephp">
<span>
By default, variables are declared within a function are local and they cannot be viewed or manipulated from outside of that function.
Location of the declaration determines the extent of a variable's visibility within the PHP program i.e. where the variable can be used or accessed.
This accessibility is known as variable <strong>scope</strong>.
</span>
<pre>
&lt;?php
// Defining function
function customMsg(){
    $msg = "Welcome To Core PHP!";
    echo $msg;
}
customMsg(); 
echo $msg;
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
// Defining function
function customMsg(){
    $msg = "Welcome To Core PHP!";
    echo $msg;
}
customMsg(); 
echo $msg;
?>
</div>
</div>

</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">

<div class="col-md-6">
<p class="phead">The global Keyword in Functions</p>
<div class="hidephp">
<span>
There may be a situation when you need to import a variable from the main program into a function, or vice versa.
In such cases, you can use the <strong>global</strong> keyword before the variables inside a function.
This keyword turns the variable into a global variable, making it visible or accessible both inside and outside the function.
</span>
<pre>
&lt;?php
$msg = "Welcome to Core PHP!";

// Defining function
function test(){
    global $msg;
    echo $msg;
}
 
test(); 
echo $msg;
 
// Assign a new value to variable
$msg = "Welcome to Core PHP Basics";
 
test(); 
echo $msg;
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
$msg = "Welcome to Core PHP!";

// Defining function
function test(){
    global $msg ;
    echo $msg .'<br>';
}
 
test(); 
echo $msg .'<br>';
 
// Assign a new value to variable
$msg = "Welcome to Core PHP Basics";
 
test(); 
echo $msg;
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
