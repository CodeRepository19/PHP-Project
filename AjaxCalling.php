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
    <title>Ajax with PHP</title>

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
<strong>Syntax:</strong><br>
<pre>
$.ajax({
        type        : varType, //GET or POST or PUT or DELETE verb
        url         : varUrl, // Location of the service
        data        : varData, //Data sent to server
        contentType : varContentType, // content type sent to server
        dataType    : varDataType, //Expected data format from server
        processdata : varProcessData, //True or False
        success     : function(msg) {//On Successfull service call

        },
        error       : function() {// When Service call fails
                }
    });
</pre>

<span><strong>JavaScript :</strong> is a client side scripting language. It is executed on the client side by the web browsers that support JavaScript. JavaScript code only works in browsers that have JavaScript enabled.</span><br>
<span><strong>XML :</strong>  is the acronym for Extensible Markup Language. It is used to encode messages in both human and machine readable formats. It’s like HTML but allows you to create your custom tags.</span><br>
</div>
<hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<p class="phead">Table Add Edit Delete using Ajax Jquery Bootstrap in PHP Mysql</p>
<div class="hidephp">
<pre>
index.php :
&lt;div class="container"&gt;
&lt;h3 align="center"&gt;Table Add, Edit, Delete using Ajax, Jquery, Bootstrap in PHP Mysql&lt;/h3&gt; 
&lt;div id="live_data"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
</div>

<div class="col-md-6">
<p class="phead">Script.js</p>
<div class="hidephp">
<pre>
&lt;script&gt;
$(document).ready(function(){  
function fetch_data()  
{  
$.ajax({  
url:"Ajax_Crud/select.php",  
method:"POST",  
success:function(data){  
$('#live_data').html(data);  
}  
});  
}  
fetch_data(); 
 
$(document).on('click', '#btn_add', function(){  
var first_name = $('#first_name').val();  
var last_name = $('#last_name').val();  
if(first_name == '')  
{  
alert("Enter First Name");  
return false;  
}  
if(last_name == '')  
{  
alert("Enter Last Name");  
return false;  
}  
$.ajax({  
url:"Ajax_Crud/insert.php",  
method:"POST",  
data:{first_name:first_name, last_name:last_name},  
dataType:"text",  
success:function(data)  
{  
alert(data);  
fetch_data();  
}  
})  
});  
function edit_data(id, text, column_name)  
{  
$.ajax({  
url:"Ajax_Crud/edit.php",  
method:"POST",  
data:{id:id, text:text, column_name:column_name},  
dataType:"text",  
success:function(data){  
alert(data);  
}  
});  
}  
$(document).on('blur', '.first_name', function(){  
var id = $(this).data("id1");  
var first_name = $(this).text();  
edit_data(id, first_name, "first_name");  
});  
$(document).on('blur', '.last_name', function(){  
var id = $(this).data("id2");  
var last_name = $(this).text();  
edit_data(id,last_name, "last_name");  
});  
$(document).on('click', '.btn_delete', function(){  
var id=$(this).data("id3");  
if(confirm("Are you sure you want to delete this?"))  
{  
$.ajax({  
url:"Ajax_Crud/delete.php",  
method:"POST",  
data:{id:id},  
dataType:"text",  
success:function(data){  
alert(data);  
fetch_data();  
}  
});  
}  
});  
}); 
&lt;/script&gt;
</pre>
</div>
</div>

</div>
<hr>
<div class="row">
<div class="col-md-6">
<p class="phead">Select.php</p>
<div class="hidephp">
<pre>
Select.php :
&lt;?php  
 $connect = mysqli_connect("localhost", "root", "", "sampleproject");  
 $output = '';  
 $sql = "SELECT * FROM ajax ORDER BY id asc";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      &lt;div class="table-responsive"&gt;
           &lt;table class="table table-bordered"&gt; 
                &lt;tr&gt;
                     &lt;th width="10%"&gt;Id&lt;/th&gt;
                     &lt;th width="40%"&gt;First Name&lt;/th&gt;
                     &lt;th width="40%"&gt;Last Name&lt;/th&gt;
                     &lt;th width="10%"&gt;Delete&lt;/th&gt;
                &lt;/tr&gt;';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
$output .= '  
&lt;tr&gt;
&lt;td&gt;'.$row["id"].'&lt;/td&gt;
&lt;td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["first_name"].'&lt;/td&gt;  
&lt;td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["last_name"].'&lt;/td&gt; 
&lt;td&gt;&lt;button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x&lt;/button&gt;&lt;/td&gt; 
&lt;/tr&gt;
';  
      }  
$output .= '  
&lt;tr> &gt;
&lt;td&gt;&lt;label&gt;New User&lt;/label&gt;&lt;/tdgt;
&lt;td&gt;&lt;input type="text" class="form-control" placeholder="First Name" id="first_name" required&gt;&lt;/td&gt;
&lt;td&gt; &lt;input type="text" class="form-control" placeholder="last Name" id="last_name" required&gt;&lt;/td&gt;
&lt;td&gt;&lt;button type="submit" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+&lt;/button&gt;&lt;/td&gt;
&lt;/tr&gt;
';  
 }  
 else  
 {  
      $output .= '&lt;tr&gt;  
                          &lt;td colspan="4">Data not Found&lt;/td> &gt;
                     &lt;/tr&gt;';  
 }  
 $output .= '&lt;/table&gt;
      &lt;/div&gt;';  
 echo $output;  
 ?&gt;
</pre>
</div>
</div>

<div class="col-md-6">
<p class="phead">insert.php</p>
<div class="hidephp">
<pre>
insert.php:
&lt;?php  
$connect = mysqli_connect("localhost", "root", "", "sampleproject");  
 $sql = "INSERT INTO ajax(first_name, last_name) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 } 
?&gt;
</pre>
</div>
</div>

</div>
<hr>
<div class="row">
<div class="col-md-6">
<p class="phead">edit.php</p>
<div class="hidephp">
<pre>
edit.php :
&lt;?php  
 $connect = mysqli_connect("localhost", "root", "", "sampleproject");  
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE ajax SET ".$column_name."='".$text."' WHERE id='".$id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?&gt;
</pre>
</div>
</div>

<div class="col-md-6">
<p class="phead">delete.php</p>
<div class="hidephp">
<pre>
delete.php:
&lt;?php  
$connect = mysqli_connect("localhost", "root", "", "sampleproject");  
 $sql = "DELETE FROM ajax WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 } 
?&gt;
</pre>
</div>
</div>

</div>

</div>

<div class="container" style="padding-bottom:5%;">
<strong>Output:</strong>   
<h3 align="center">Table <code>Add</code> <code>Edit</code> <code>Delete</code> using Ajax Jquery Bootstrap in PHP Mysql</h3><br />  
<div id="live_data"></div>                 
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
		
<script>  
$(document).ready(function(){  
function fetch_data()  
{  
$.ajax({  
url:"Ajax_Crud/select.php",  
method:"POST",  
success:function(data){  
$('#live_data').html(data);  
}  
});  
}  
fetch_data(); 
 
$(document).on('click', '#btn_add', function(){  
var first_name = $('#first_name').val();  
var last_name = $('#last_name').val();  
if(first_name == '')  
{  
alert("Enter First Name");  
return false;  
}  
if(last_name == '')  
{  
alert("Enter Last Name");  
return false;  
}  
$.ajax({  
url:"Ajax_Crud/insert.php",  
method:"POST",  
data:{first_name:first_name, last_name:last_name},  
dataType:"text",  
success:function(data)  
{  
alert(data);  
fetch_data();  
}  
})  
});  
function edit_data(id, text, column_name)  
{  
$.ajax({  
url:"Ajax_Crud/edit.php",  
method:"POST",  
data:{id:id, text:text, column_name:column_name},  
dataType:"text",  
success:function(data){  
alert(data);  
}  
});  
}  
$(document).on('blur', '.first_name', function(){  
var id = $(this).data("id1");  
var first_name = $(this).text();  
edit_data(id, first_name, "first_name");  
});  
$(document).on('blur', '.last_name', function(){  
var id = $(this).data("id2");  
var last_name = $(this).text();  
edit_data(id,last_name, "last_name");  
});  
$(document).on('click', '.btn_delete', function(){  
var id=$(this).data("id3");  
if(confirm("Are you sure you want to delete this?"))  
{  
$.ajax({  
url:"Ajax_Crud/delete.php",  
method:"POST",  
data:{id:id},  
dataType:"text",  
success:function(data){  
alert(data);  
fetch_data();  
}  
});  
}  
});  
});  
</script>

</body>
</html>
