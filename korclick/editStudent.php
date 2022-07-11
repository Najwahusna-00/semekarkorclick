<!DOCTYPE html>
<html>
<head><title>KORCLICK | Edit student</title>

		<style>
			body {
			background-image: url('images/wallpaper3.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			}
		</style>
		
				<style>
				.container {
				width: 550px;
				text-align: center;
				margin-left: auto;
				margin-right: auto;
				}
				</style>
	<style type="text/css">* {cursor: url(https://cur.cursors-4u.net/cursors/cur-9/cur270.cur), auto !important;}</style>
	<link rel="icon" type="image/webp" href="images/index/logo sekolah.webp"/>	
	
</head>

<body>
<?php
include "dbcon.php";
$id = $_GET ['id']; //get id from query string
$qry = mysqli_query($conn, "select * from student where id='$id'"); //select query
$data = mysqli_fetch_array($qry); //to fetch data from database

if(isset($_POST['update'])) //when click on update button
{
$id = $_POST['id'];
$student_name = $_POST['student_name'];
$student_class = $_POST['student_class'];
$student_email = $_POST['student_email'];

$edit = mysqli_query($conn,"update student set id='$id' , student_name='$student_name' , student_class='$student_class' , student_email='$student_email' where id='$id'");
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


<br><br>
<center><h3>Update Record </h3>
<form method="POST">
	<table border="1">
		<tr><td>Student ID</td>
		<td><input type="text" name="id" size="50" value="<?php echo $data['id']?>"></td>
		</tr>

		<tr><td>Student Name</td>
		<td><input type="text" name="student_name" size="50" value="<?php echo $data['student_name']?>"></td>
		</tr>

		<tr><td>Student Class</td>
		<td><input type="text" name="student_class" size="50" value="<?php echo $data['student_class']?>"></td>
		</tr>

		<tr><td>Student Email</td>
		<td><input type="text" name="student_email" size="50" value="<?php echo $data['student_email']?>"></td>
		</tr>

	
</table>
	<tr><td><input type="submit" name="update" value="Update Record">
	</td></tr>
</form>
</body></html>

<!--

<center><h3>Update student Records</h3>
		<div class='container'>
			<form method="POST">
				<label for="fname"><font color="black" size="5px"face="serif">Student ID</font></label>
				<input type="text" name="student_name" value="<?php echo $data['id']?>"><br>
				<label for="fname"><font color="black" size="5px"face="serif">Student Name</font></label>
				<input type="text" name="student_name" value="<?php echo $data['student_name']?>"><br>
				<label for="fname"><font color="black" size="5px"face="serif">Class</font></label>
				<input type="text" name="student_class" value="<?php echo $data['student_class']?>"><br>
				<label for="fname"><font color="black" size="5px"face="serif">Email</font></label>
				<input type="text" name="student_email" value="<?php echo $data['student_email']?>"><br>
				
				<input type="submit" name="update" value="Update Record">
			</form>
		</div>
</body>
</html>
-->