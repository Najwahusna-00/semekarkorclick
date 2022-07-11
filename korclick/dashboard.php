<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("dbcon.php");
?>


<!DOCTYPE html>
<html>
	<head>
		<title>KORCLICK | Student Profile</title>
		
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/webp" href="images/index/logo sekolah.webp"/>	
	<link rel="stylesheet" href="css/click button.css">
	
	<style type="text/css">* {cursor: url(https://cur.cursors-4u.net/cursors/cur-9/cur270.cur), auto !important;}</style>
	
	<style>
	body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
	.w3-row-padding img {margin-bottom: 12px}
	/* Set the width of the sidebar to 120px */
	.w3-sidebar {width: 120px;background: #90CDF2;}
	/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
	#main {margin-left: 120px}
	/* Remove margins from "page content" on small screens */
	@media only screen and (max-width: 600px) {#main {margin-left: 0}}
	</style>

		<style>
			body {
			background-image: url('images/wallpaper3.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			}
			
			a{
			 text-decoration:none;
			}
		</style>	
		
			<link rel="stylesheet" href="css/top button.css">
			
			<script type="text/javascript" src="js/top button.js"></script>		
		<style>
		#profile {
		  border-collapse: collapse;
		  width: 100%;
		}

		#profile td, #profile th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#profile tr:hover {background-color: #ddd;}

		#profile th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  color: black;
		}
		
		
		</style>
		
		<style>
	#schedule {
		font-family: Arial, Helvetica, san-serif;
		border-collapse: collapse;
		width: 60%;
		
	}
	
	#schedule th{
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: center;
		background-color: #DDDDDD;
		color: black;
		
	}
	
	#schedule td {
		border: 1px solid #ddd;
		padding: 8px;
	}
	
	#schedule tr:nth-child(even){background-color: #FFFFFF;}
	#schedule tr:hover {background-color: #99BAE7;}
	
	</style>

	<style>
	#activity {
		font-family: Arial, Helvetica, san-serif;
		border-collapse: collapse;
		width: 100%;
		color: black;
		background-color: #CAEDFF;
		border: 1px solid white;
	}
	
	#activity th{
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: center;
		background-color: #5CADD5;
		color: black;
		border: 1px solid white;
		
	}
	
	#activity td {
		border: 1px solid #ddd;
		padding: 8px;
		border: 1px solid white;
	}
	
	#activity tr:hover {background-color: #D6AAC2;}
	
	</style>
	
	</head>
	
	<body class="w3-black">
	
	<!-- Icon Bar (Sidebar - hidden on small screens) -->
	<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
	  <!-- Avatar image in top left corner -->
	  <img src="images/logo korclick.png" style="width:100%">
	  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-#90CDF2 w3-hover-white">
		<i class="fa fa-home w3-xxlarge"></i>
		<p>HOME</p>
	  </a>
	  <!-- <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
		<i class="fa fa-user w3-xxlarge"></i>
		<p>PROFILE</p>
	  </a>-->
	  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
		<i class="fa fa-eye w3-xxlarge"></i>
		<p>REGISTRATION</p>
	  </a>
	  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
		<i class="fa fa-envelope w3-xxlarge"></i>
		<p>SCHEDULE</p>
	  </a>
	  <br>
		<p><a href="logout.php">LOGOUT</a></p>
	  </a>
	  	  
	</nav>

	<!-- Navbar on small screens (Hidden on medium and large screens) -->
	<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
	  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
		<a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
	<!--	<a href="#about" class="w3-bar-item w3-button" style="width:25% !important">STUDENT PROFILE</a>-->
		<a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">RESGISTRATION</a>
		<a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">SCEHDULE</a>

	  </div>
	</div>

	<!-- Page Content -->
	<div class="form" "w3-padding-large" id="main">
	  <!-- Header/Home -->
	  <header class="w3-container w3-padding-32 w3-center w3-white" id="home">
		<h1 class="w3-jumbo"><span class="w3-hide-small">Welcome,</span> <?php echo $_SESSION['username']; ?>!</h1>
	  </header>
	  



	  <!-- About Section 
	  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
		<h2 class="w3-text-black">STUDENT PROFILE</h2>
		<hr style="width:200px" class="w3-opacity">
		

	
			<table id="profile">
			<?php
			
			$data = "student_name";
			?>
			  <tr>
				<th bgcolor="#5CADD5" style="height:50px;width:20%">STUDENT NAME</th>
				<th bgcolor="white"><?php echo $data['student_name']; ?></th>
			  </tr>
			  <tr>
				<th bgcolor="#5CADD5">STUDENT ID</th>
				<th bgcolor="white"><?php echo $_SESSION['username']; ?></th>
			  </tr>
			  <tr>
				<th bgcolor="#5CADD5">CLASS</th>
				<th bgcolor="white"><?php echo $_SESSION['student_class']; ?></th>
			  </tr>
			  <tr>
				<th bgcolor="#5CADD5">ADDRESS</th>
				<th bgcolor="white"><?php echo $_SESSION['username']; ?></th>
			  </tr>
			  <tr>
				<th bgcolor="#5CADD5">PHONE NUMBER</th>
				<th bgcolor="white"><?php echo $_SESSION['username']; ?></th>
			  </tr>
			  <tr>
				<th bgcolor="#5CADD5">EMAIL ADDRESS</th>
				<th bgcolor="white"><?php echo $_SESSION['student_email']; ?></th>
			  </tr>
			  	  
			</table>
-->

  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-black">CO-CURRICULUM REGISTRATION</h2>
    <hr style="width:200px" class="w3-opacity">

			<style>
				.center-justified {
				text-align: justify;
				margin: 0 auto;
				width: 50em;
				}
			</style>				
				
				<br>
				<br>

					<div class="center-justified"><font color="black" face="serif" size="4">
					KorClick is designed to help students registering their co-curricular activities easily. No more manual method needed. Simply select your desired co-curricular activities and get your energy boost up for upcoming events! Our advanced features make it easy for you to register multiple co-curricular activities, view on your personal information and check on the next activities for each co-curricular activities.
					Simply click on the register button now!</font>
					</div>
					
<br>
<br>

	<center><a href="cocureg.php"target="_blank"><button class="button">REGISTER NOW!</button></a> <br> <br> <br> <br> <br> <br>

    <!-- Grid for photos -->



    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  	
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-black">ACTIVITY SCHEDULE</h2>
	
	<br>
	<br>
	
	<center>
	<table border="1" id="activity">
				 <tr>
				 <th>No.</th>
				<th>Co-curricular activities</th>
				  <th>Date</th>
				  <th>Teacher in charge</th>
				 </tr>
	<?php
	include "dbcon.php"; // Using database connection file here
	$records = mysqli_query($conn,"select * from schedule"); // to fetch data from database
	while($data = mysqli_fetch_array($records))
	{
	?>
					<tr>
					 <td><?php echo $data ['id'];?></td>
					 <td><?php echo $data ['cocurricular_activity'];?></td>
					 <td><?php echo $data ['date'];?></td>
					 <td><?php echo $data ['teacher'];?></td>
					</tr>
					</tr>
	<?php
	}
	?>
			</table>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 
  				<div class="box" 
					<button onclick="topFunction()" 
					id="myBtn" title="Go to top"><font face="serif">Top</font></button>
                    <script src="js/top button.js"></script>
					
				</div>
				
    <!-- Footer -->


  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>