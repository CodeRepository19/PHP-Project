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

$sql= "SELECT * FROM feedback";
$selectquery = mysqli_query($conn, $sql);
if (!mysqli_query($conn, $sql))
{
die ('SQL Error: ' . mysqli_error($conn));
}

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <title>DataGrids</title>

    <!-- bootstrap -->        
	<link rel="stylesheet" href="assets/css/bootstrap.4.2.1.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/Scrooltop.css">
	
	<!-- Javascript files --> 	
	<script  src="assets/js/jquery-3.1.1.min.js" ></script>
	<script src="assets/js/bootstrap.min.js"></script>
    
	<!-- For PDF Creation --->	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
	
	<!-- For Image Download --->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
	
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
<a class="dropdown-item" href="DataGrids.php">DataGrids <span class="sr-only">(current)</span></a>		
		<a class="dropdown-item" href="ContactForm.php">Contact Form</a>	  
          <a class="dropdown-item" href="ReadingXml.php">Reading XML File</a>
          <a class="dropdown-item" href="ErrorHandling.php">Error Handling </a>
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
		<div class="row">						
		<table class="table" id="tblData" style="background-color:aliceblue ! important">		
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
		</div>
		</div>
		
<div align="center">  
<button name="create_excel" onclick="exportTableToExcel('tblData', 'Feedback_List')" class="btn btn-info">Create Excel File</button>  
<button name="create_pdf" id="btnExport" class="btn btn-info">Create PDF File</button>  
<a href="javascript:void(0);" onclick="printPage();" class="btn btn-info">Print</a> 
<button id="export" class="btn btn-info">Save Png</button>
</div>  
				
<script>
// Script for Export to excel
function exportTableToExcel(tableID, filename = ''){
var downloadLink;
var dataType = 'application/vnd.ms-excel';
var tableSelect = document.getElementById(tableID);
var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

// Specify file name
filename = filename?filename+'.xls':'excel_data.xls';

// Create download link element
downloadLink = document.createElement("a");

document.body.appendChild(downloadLink);

if(navigator.msSaveOrOpenBlob){
var blob = new Blob(['\ufeff', tableHTML], {
type: dataType
});
navigator.msSaveOrOpenBlob( blob, filename);
}else{
// Create a link to the file
downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

// Setting the file name
downloadLink.download = filename;

//triggering the function
downloadLink.click();
}
}

// For PDF Formate download
 $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblData')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        });
		// Print a page
	 function printPage(){
        var tableData = '<table border="1">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
        var data = '<button onclick="window.print()">Print this page</button>'+tableData;       
        myWindow=window.open('','','width=800,height=600');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        myWindow.focus();
    };
	
	// Image Download
	$('#export').on('click', function() {
    html2canvas($('#tblData'), {
        onrendered: function(canvas) {                                      

            var saveAs = function(uri, filename) {
                var link = document.createElement('a');
                if (typeof link.download === 'string') {
                    document.body.appendChild(link); // Firefox requires the link to be in the body
                    link.download = filename;
                    link.href = uri;
                    link.click();
                    document.body.removeChild(link); // remove the link when done
                } else {
                    location.replace(uri);
                }
            };

            var img = canvas.toDataURL("image/png"),
                uri = img.replace(/^data:image\/[^;]/, 'data:application/octet-stream');

            saveAs(uri, 'tbldata.png');
        }
    }); 
});
	
	// Convert to Json
	function tableToJson(table) { 
var table = $('tbldata').tableToJSON(); // Convert the table into a javascript object
  console.log(table);
  alert(JSON.stringify(table));
}
		
</script>

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
