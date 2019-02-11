<?php
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
$Query = "SELECT * FROM members WHERE member_name LIKE '$Name%'";
//Query execution
$ExecQuery = mysqli_query($conn, $Query);
//Creating unordered list to display result.
echo '
<h5 class="alert alert-success">Get Data From DB Using Ajax AutoSuggest feature.</h5>
<table class="table">
<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Mobile</th>				
			</tr>
		</thead>
		<tbody>
			
';

//Fetching result from database.
while ($Result = mysqli_fetch_array($ExecQuery)) 
{	
?>
<tr>
<!-- Creating unordered list items.
Calling javascript function named as "fill" found in "script.js" file.
By passing fetched result as parameter. -->
<td onclick='fill("<?php echo $Result['member_id']; ?>")'>
<a>
<!-- Assigning searched result in "Search box" in "search.php" file. -->
<?php echo $Result['member_id']; ?>
</td></a>
<td onclick='fill("<?php echo $Result['member_name']; ?>")'>
<a>
<!-- Assigning searched result in "Search box" in "search.php" file. -->
<?php echo $Result['member_name']; ?>
</td></a>
<td onclick='fill("<?php echo $Result['member_email']; ?>")'>
<a>
<!-- Assigning searched result in "Search box" in "search.php" file. -->
<?php echo $Result['member_email']; ?>
</td></a>
<td onclick='fill("<?php echo $Result['member_mobile']; ?>")'>
<a>
<!-- Assigning searched result in "Search box" in "search.php" file. -->
<?php echo $Result['member_mobile']; ?>
</td></a></tr>
<!-- Below php code is just for closing parenthesis. Don't be confused. -->
<?php
}
}
?>
		
</tbody>
</table>