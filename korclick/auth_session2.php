<!--
<?php
	$conn = mysqli_connect("localhost","root","","korclick");
	//Check Connection
	if(mysqli_connect_errno())
	{
	 echo "Failed to connect to Database;".mysqli_connect_error();
	}
?>
--> 

<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: adminlogin.php");
        exit();
    }
?>