<!DOCTYPE html>
<html>
<head><title>KORCLICK | Edit activity schedule</title>

		<style>
			body {
			background-image: url('images/wallpaper3.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			}
		</style>
	<style type="text/css">* {cursor: url(https://cur.cursors-4u.net/cursors/cur-9/cur270.cur), auto !important;}</style>
	<link rel="icon" type="image/webp" href="images/index/logo sekolah.webp"/>			
</head>

<body>
<?php
include "dbcon.php";
$id = $_GET ['id']; //get id from query string
$qry = mysqli_query($conn, "select * from schedule where id='$id'"); //select query
$data = mysqli_fetch_array($qry); //to fetch data from database

if(isset($_POST['update'])) //when click on update button
{
$id = $_POST['id']; 
$cocurricular_activity = $_POST['cocurricular_activity'];
$date = $_POST['date'];
$teacher = $_POST['teacher'];

$edit = mysqli_query($conn, "update schedule set id='$id' , cocurricular_activity='$cocurricular_activity' , date='$date' , teacher='$teacher' where id='$id'");
if($edit)
{
	mysqli_close($conn);//close connection_aborted
	header("location:admindashboard.php"); //redirect to all records page
	exit;
	
}

else
{
	echo mysqli_error();
}
}
?>

<center><h3>Update Records</h3>

<form method="POST">
	<table border="1">

		<tr><td>ID</td>
		<td><input type="text" name="id" size="50" value="<?php echo $data['id']?>"></td>
		</tr>


		<tr><td>Co-curricular activity</td>
		<td><input type="text" name="cocurricular_activity" size="50" value="<?php echo $data['cocurricular_activity']?>"></td>
		</tr>

		<tr><td>Date</td>
		<td><input type="text" name="date" size="50" value="<?php echo $data['date']?>"></td>
		</tr>

		<tr><td>Teacher in-charge</td>
		<td><input type="text" name="teacher" size="50" value="<?php echo $data['teacher']?>"></td>
		</tr>
	
</table>
	<tr><td><input type="submit" name="update" value="Update Record">
	</td></tr>
</form>


<!--

		<div class='container'>
			<form method="POST">
				<label for="fname"><font color="black" size="5px"face="serif">Co-curricular activity</font></label>
				<input type="text" name="cocurricular_activity" value="<?php echo $data['cocurricular_activity']?>"><br>
				<label for="fname"><font color="black" size="5px"face="serif">Date</font></label>
				<input type="text" name="date" value="<?php echo $data['date']?>"><br>
				<label for="fname"><font color="black" size="5px"face="serif">Teacher in-charge</font></label>
				<input type="text" name="teacher" value="<?php echo $data['teacher']?>"><br>
				<input type="submit" name="update" value="Update Record">
			</form>
		</div>
		
-->

</body>
</html>