<!DOCTYPE html>
<html>
<head><title>KORCLICK | Edit co-curriculum registration</title>
 
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
$qry = mysqli_query($conn, "select * from registration where id='$id'"); //select query
$data = mysqli_fetch_array($qry); //to fetch data from database

if(isset($_POST['update'])) //when click on update button
{
$id = $_POST['id'];
$student_name = $_POST['student_name'];
$uniform_body = $_POST['uniform_body'];
$association_club = $_POST['association_club'];
$sport_game = $_POST['sport_game'];

$edit = mysqli_query($conn, "update registration set id='$id' , student_name='$student_name' , uniform_body='$uniform_body' , association_club='$association_club' , sport_game='$sport_game' where id='$id'");
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

		<tr><td>Uniform Body</td>
		<td><input type="text" name="uniform_body" size="50" value="<?php echo $data['uniform_body']?>"></td>
		</tr>

		<tr><td>Association Club</td>
		<td><input type="text" name="association_club" size="50" value="<?php echo $data['association_club']?>"></td>
		</tr>
		
		<tr><td>Sport and Game</td>
		<td><input type="text" name="sport_game" size="50" value="<?php echo $data['sport_game']?>"></td>
		</tr>
	
</table>
	<tr><td><input type="submit" name="update" value="Update Record">
	</td></tr>
</form>

<!--
<center><h3>Update student Records</h3>
		<div class='container'>
			<form method="POST">
				<label for="fname"><font color="black" size="5px"face="serif">ID</font></label>
				<input type="text" name="student_name" value="<?php echo $data['id']?>"><br>
				<label for="fname"><font color="black" size="5px"face="serif">Student Name</font></label>
				<input type="text" name="student_name" value="<?php echo $data['student_name']?>"><br>
				<label for="fname"><font color="black" size="5px"face="serif">Unifrom Body</font></label>
				<input type="text" name="uniform_body" value="<?php echo $data['uniform_body']?>"><br>
				<label for="fname"><font color="black" size="5px"face="serif">Association Club</font></label>
				<input type="text" name="association_club" value="<?php echo $data['association_club']?>"><br>
				<label for="fname"><font color="black" size="5px"face="serif">Sport and Game</font></label>
				<input type="text" name="sport_game" value="<?php echo $data['sport_game']?>"><br>
				<input type="submit" name="update" value="Update Record">
			</form>
		</div>
		
		-->
		
</body></html>