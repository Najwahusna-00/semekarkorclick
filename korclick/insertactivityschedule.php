<!--
<?php 
include_once 'dbcon.php'; 
if(isset($_POST['submit'])) 
{     
 
     $id = $_POST['id']; 
     $sql = "INSERT INTO schedule (id) 
     VALUES ('$id')"; 
     if (mysqli_query($conn, $sql)) { 
		echo "<script type='text/javascript'>alert('Record Successfully Added!'); window.location.href = 'admindashboard.php';</script>";
		
     } else { 
        echo "Error: " . $sql . ":-" . mysqli_error($conn); 
     } 
     mysqli_close($conn); 
} 

?>
-->

<?php
include "dbcon.php"; // Using database connection file here

	$id = $_REQUEST['id'];
	$cocurricular_activity = $_REQUEST['cocurricular_activity'];
	$date = $_REQUEST['date'];
	$teacher = $_REQUEST['teacher'];
	$sql = "INSERT INTO schedule VALUES ('$id','$cocurricular_activity','$date','$teacher)";
	
	if(mysqli_query($conn, $sql)){
		
			echo "<h3>Data stored in a database succesfully.";
			echo nl2br("\n$id\n $id\n $cocurricular_activity\n $date\n $teacher");
	}else{
		echo "ERROR: Record Failed! Sorry $sql."
	}
	// Close connectionmysqli_close($conn);
?>
	