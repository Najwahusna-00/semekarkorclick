
<?php 
 
include "dbcon.php"; 
 
$id = $_GET['id']; 
 
$del = mysqli_query($conn, "delete from registration where id = $id"); 
 
if($del) 
{ 
 mysqli_close($conn); 
 header("location:admindashboard.php"); 
 exit; 
} 
else 
{ 
 echo "Error deleting record"; 
} 
?>