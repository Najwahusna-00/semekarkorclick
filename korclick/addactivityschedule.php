<?php

include('dbcon.php');

//data insertion
  try{

    //checking if the data comes from students form
    if(isset($_POST['submit'])){

      //students data insertion to database table "students"
        $qry = mysqli_query($conn,"insert into schedule(id,cocurricular_activity,date,teacher) values('$_POST[id]','$_POST[cocurricular_activity]','$_POST[date]','$_POST[teacher]')");

    }



  }
  catch(Execption $e){
    $error_msg =$e->getMessage();
  }

 ?>

<!DOCTYPE html>
	<html>
		<head><title>KORCLICK | Add activity</title>
		<style type="text/css">

	  .message{
		padding: 10px;
		font-size: 15px;
		font-style: bold;
		text-align: center;
		color: black;
	  }
	</style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<style>
			body {
			background-image: url('images/wallpaper3.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			}
	
	#student {
		font-family: Arial, Helvetica, san-serif;
		border-collapse: collapse;
		width: 60%;
		
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
		text-align: center;
	}
	
	#student tr:nth-child(even){background-color: #FEBDF4;}
	#student tr:hover {background-color: #F2FE87;}
	
	</style>
	<style type="text/css">* {cursor: url(https://cur.cursors-4u.net/cursors/cur-9/cur270.cur), auto !important;}</style>
	<link rel="icon" type="image/webp" href="images/index/logo sekolah.webp"/>	
	</head>
		<body align="center">
	
<div class="message">
        <?php if(isset($success_msg)) echo $success_msg; if(isset($error_msg)) echo $error_msg; ?>
</div>



<div class="content" align="center">


  <div class="row" id="student">


      <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
      <h4>Add Records</h4>
	  <form action="insertreg.php" method="post">
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">ID</label>
          <div class="col-sm-7">
            <input type="text" name="id"  class="form-control" id="input1" placeholder="student ID" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Co-curricular Activity:</label>
          <div class="col-sm-7">
            <input type="text" name="cocurricular_activity"  class="form-control" id="input1" placeholder="activity" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Date:</label>
          <div class="col-sm-7">
            <input type="text" name="date"  class="form-control" id="input1" placeholder="date" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Teacher:</label>
          <div class="col-sm-7">
            <input type="text" name="teacher"  class="form-control" id="input1" placeholder="name" />
          </div>
      </div>

	  
	  <table id="students">
<tr>
<td><input type="submit" name="submit" value="Add Record" onclick="alert('Your Record Has Been Succesfully Added!')">
	<td><form method="post" action="">     
			<center><a href="admindashboard.php" button class="button buttonAdd">Cancel</button></a></center>
		
</tr>
    </form>

  </div>



</div><br>
<!-- Contents, Tables, Forms, Images ended -->
</center>
</body>
<!-- Body ended  -->
</html>
