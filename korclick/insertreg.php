<!--
<?php 
include_once 'dbcon.php'; 
if(isset($_POST['submit'])) 
{     
 
     $id = $_POST['id']; 
     $sql = "INSERT INTO registration (id) 
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
	$student_name = $_REQUEST['student_name'];
	$uniform_body = $_REQUEST['uniform_body'];
	$association_club = $_REQUEST['association_club'];
	$sport_game = $_REQUEST['sport_game'];
	$sql = "INSERT INTO registration VALUES ('$id','$student_name','$uniform_body','$association_club',$sport_game)";
	
	if(mysqli_query($conn, $sql)){
		
			echo "<h3>Data stored in a database succesfully.";
			echo nl2br("\n$id\n $student_name\n $uniform_body\n $association_club\n $sport_game");
	}else{
		echo "ERROR: Record Failed! Sorry $sql."
	}
	// Close connectionmysqli_close($conn);
?>
	