<!--
<?php 
include_once 'dbcon.php'; 
if(isset($_POST['submit'])) 
{     
 
     $id = $_POST['id']; 
     $sql = "INSERT INTO student (id) 
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
	$staff_name = $_REQUEST['student_name'];
	$student_class = $_REQUEST['student_class'];
	$student_email = $_REQUEST['student_email'];
	$sql = "INSERT INTO student VALUES ('$id','$student_name','$student_class','student_email')";
	
	if(mysqli_query($conn, $sql)){
		
			echo "<h3>Data stored in a database succesfully.";
			echo nl2br("\n$id\n $student_name\n $student_class\n $student_email");
	}else{
		echo "ERROR: Record Failed! Sorry $sql."
	}
	// Close connectionmysqli_close($conn);
?>
	