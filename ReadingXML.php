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
    <title>XML Read</title>

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
		<a class="dropdown-item" href="DatabaseConnectivity.php">Database Connectivity</a>	  
		<a class="dropdown-item" href="SqlInjection.php">Sql Injection</a>
<a class="dropdown-item" href="DataGrids.php">DataGrids</a>		
		<a class="dropdown-item" href="ContactForm.php">Contact Form</a>	  
          <a class="dropdown-item" href="ReadingXml.php">Reading XML File <span class="sr-only">(current)</span></a>
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
<strong>XML:</strong> <strong style="color:#44192fa3 !important">is the acronym for Extensible Markup Language.</strong><br>
<strong>DOM:</strong> <strong style="color:#44192fa3 !important">is the acronym for Document Object Model.</strong>
<br><span>
It’s a cross platform and language neutral standard that defines how to access and manipulate data in;
<ul>
<li>HTML</li>
<li>XHTML</li>
<li>XML</li>
</ul>
</span>
<strong>XML Parsers:</strong> <strong style="color:#44192fa3 !important">is a program that translates the XML document into an XML Document Object Model (DOM) Object.</strong>
<br><span>
The XML DOM Object can then be manipulated using JavaScript, Python, and PHP etc.
</span>
<br><strong>Why use XML?</strong>
<ul>
<li>XML documents can be used to store configuration settings of an application</li>
<li>It allows you to create your own custom tags which make it more flexible.</li>
</ul>
</div>
</div>
</div>
<hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<p class="phead">XML Document example</p>
<div class="hidephp">
<ul>
<li><code>“&lt;?xml version="1.0" encoding="utf-8"?&gt;”</code> specifies the xml version to be used and encoding</li>
<li><code>“&lt;employees&gt;”</code> is the root element.</li>
<li><code>“&lt;record…&gt;…&lt;/record&gt;”</code> are the child elements of employees respectively.</li>
</ul>
<pre>
&lt;?xml version="1.0" encoding="utf-8"?&gt;

&lt;employees&gt;

        &lt;record emp_no = "101"&gt;
            &lt;name&gt;Gupta&lt;/name&gt;
            &lt;position&gt;Software Developer&lt;/position&gt;
        &lt;/record&gt;

        &lt;record emp_no = "102"&gt;
            &lt;name&gt;Vijay&lt;/name&gt;
            &lt;position&gt;Senior Software Developer&lt;/position&gt;
        &lt;/record&gt;

&lt;/employees&gt;
</pre>

</div>
</div>


<div class="col-md-6">
<p class="phead">Read XML using PHP</p>
<div class="hidephp">
<ul>
<li><strong>simplexml_load_file </strong> function to load the file name <strong>employees.xml</strong> and assign the contents to the array variable $xml.</li>
<li><strong>“$list = $xml->record;”</strong> gets the contents of the record node.</li>
<li><strong>“for ($i = 0; $i < count(…)…”</strong> is the for loop that reads the numeric array and outputs the results.</li>
<li><strong>“$list[$i]->attributes()->emp_no;”</strong> reads the man_no attribute of the element</li>
<li><strong>“$list[$i]->name;”</strong> reads the value of the name child element</li>
<li><strong>“$list[$i]->position;”</strong> reads the value of the position child element</li>
</ul>
<pre>
&lt;?php
$xml = simplexml_load_file('employees.xml');
$list = $xml->record;
for ($i = 0; $i < count($list); $i++) {
    echo '<b>Man no:</b> ' . $list[$i]->attributes()->man_no .;
    echo 'Name: ' . $list[$i]->name .;
    echo 'Position: ' . $list[$i]->position .;
}
?&gt;
</pre>
<strong><p>Output:</p></strong>
<?php
$xml = simplexml_load_file('employees.xml');

echo '<h2>Employees Listing</h2>';

$list = $xml->record;

for ($i = 0; $i < count($list); $i++) {

    echo '<b>emp_no:</b> ' . $list[$i]->attributes()->emp_no . '<br>';

    echo 'Name: ' . $list[$i]->name . '<br>';

    echo 'Position: ' . $list[$i]->position . '<br><br>';

}
?>
</div>
</div>

</div>
</div>
<hr>

<div class="container-fluid" style="padding-bottom:5%;">
<div class="row">
<div class="col-md-6">
<p class="phead">Create a XML File</p>
<div class="hidephp">
<pre>
&lt;?php
$dom = new DOMDocument();

		$dom->encoding = 'utf-8';

		$dom->xmlVersion = '1.0';

		$dom->formatOutput = true;

	$xml_file_name = 'Courses_list.xml';

		$root = $dom->createElement('Courses');

		$Course_node = $dom->createElement('Course');

		$attr_Course_id = new DOMAttr('Course_id', '01');

		$Course_node->setAttributeNode($attr_Course_id);

	$child_node_title = $dom->createElement('Title', 'PHP');

		$Course_node->appendChild($child_node_title);

		$child_node_year = $dom->createElement('Version', 5);

		$Course_node->appendChild($child_node_year);

	$child_node_genre = $dom->createElement('Title', 'Bootstrap');

		$Course_node->appendChild($child_node_genre);

		$child_node_ratings = $dom->createElement('Version', 4);

		$Course_node->appendChild($child_node_ratings);

		$root->appendChild($Course_node);

		$dom->appendChild($root);

	$dom->save($xml_file_name);

	echo "$xml_file_name has been successfully created";
	?&gt;
</pre>
</div>
</div>
<div class="col-md-6">
<p class="phead">Description</p>
<div class="hidephp">
<ul>
 <li><strong>“$dom = new DOMDocument();”</strong> creates an instance of DOMDocument class.</li>
 <li><strong>“$dom-&gt;encoding = 'utf-8';”</strong> sets the document encoding to utf-8</li>
 <li><strong>“$dom-&gt;xmlVersion = '1.0';”</strong> specifies the version number 1.0</li>
 <li><strong>“$dom-&gt;formatOutput = true;” </strong>ensures that the output is well formatted</li>
 <li><strong>“$root = $dom-&gt;createElement('Course');”</strong> creates the root node named Movies</li>
 <li><strong>“$attr_movie_id = new DOMAttr('Course_id', '5467');”</strong> defines the movie id attribute of Courses node</li>
 <li><strong>“$child_node_element_name = $dom-&gt;createElement('ElementName', 'ElementValue')”</strong> creates the child node of Movies node. ElementName specifies the name of the element e.g. Title. ElementValue sets the child node value e.g. The Campaign.</li>
 <li><strong>“$root-&gt;appendChild($Course_node);” </strong>appends the Course_node elements to the root node Movies</li>
 <li><strong>“$dom-&gt;appendChild($root);” </strong>appends the root node to the XML document.</li>
 <li><strong>“$dom-&gt;save($xml_file_name);”</strong> saves the XML file in the root directory of the web server.</li>
 <li>Finally Creates the link to the XML file.</li>
 </ul>

<strong><p>Output:</p></strong>
<?php 
$dom = new DOMDocument();

		$dom->encoding = 'utf-8';

		$dom->xmlVersion = '1.0';

		$dom->formatOutput = true;

	$xml_file_name = 'Courses_list.xml';

		$root = $dom->createElement('Courses');

		$Course_node = $dom->createElement('Course');

		$attr_Course_id = new DOMAttr('Course_id', '01');

		$Course_node->setAttributeNode($attr_Course_id);

	$child_node_title = $dom->createElement('Title', 'PHP');

		$Course_node->appendChild($child_node_title);

		$child_node_year = $dom->createElement('Version', 5);

		$Course_node->appendChild($child_node_year);

	$child_node_genre = $dom->createElement('Title', 'Bootstrap');

		$Course_node->appendChild($child_node_genre);

		$child_node_ratings = $dom->createElement('Version', 4);

		$Course_node->appendChild($child_node_ratings);

		$root->appendChild($Course_node);

		$dom->appendChild($root);

	$dom->save($xml_file_name);

	echo "<a class='alert alert-success' href= '$xml_file_name'> $xml_file_name . has been successfully created</a>"

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