
<?php
	$conn = mysqli_connect("localhost","root","","korclick");
	//Check Connection
	if(mysqli_connect_error())
	{
	 echo "Failed to connect to MySQL: " .mysqli_connect_error();
	}
?>
