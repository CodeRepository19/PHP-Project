<?php  
 $connect = mysqli_connect("localhost", "root", "", "sampleproject");  
 $sql = "DELETE FROM ajax WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>