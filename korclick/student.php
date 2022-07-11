<DOCTYPE html>
<html>
	<head><Title>Student</title>
	
	<style>
	#student {
		font-family: Arial, Helvetica, san-serif;
		border-collapse: collapse;
		width: 70%;
		
	}
	
	#student th{
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: center;
		background-color: #BEC0D8;
		color: black;
		
	}
	
	#student td {
		border: 1px solid #ddd;
		padding: 8px;
	}
	
	#student tr:nth-child(even){background-color: #FEBDF4;}
	#student tr:hover {background-color: #F2FE87;}
	
	</style>
	</head>
	
	<body bgcolor="#E3FDF7">
	
	<br>
	<br>
	<br>
	<br>
	
		<center><h1>STUDENT INFORMATION</h1>
			<table border="1" id="student">
				 <tr><th>Student ID</th>
				  <th>Student Name</th>
				  <th>Class</th>
				  <th>Email</th>
				  <th colspan="2">Action</th>
				 </tr>
	<?php
	include "dbcon.php"; // Using database connection file here
	$records = mysqli_query($conn,"select * from student"); // to fetch data from database
	while($data = mysqli_fetch_array($records))
	{
	?>
					<tr>
					 <td><?php echo $data ['student_id'];?></td>
					 <td><?php echo $data ['student_name'];?></td>
					 <td><?php echo $data ['student_class'];?></td>
					 <td><?php echo $data ['student_email'];?></td>
					 <td><a href="editStudent.php?student_id=<?php echo $data ['student_id'];?>">Edit</td>
					 <td><a href="deletestudent.php?student_id=<?php echo $data ['student_id'];?>">Delete</td>
					</tr>
					</tr>
	<?php
	}
	?>
			</table>
			<br>
			<br>
			<a href="addstudent.php"><input type="submit" name="add" value="Add Record"></a>
	</body>
</html>