<?php
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=korclick", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

// FORM SUBMITTED DATA CAN ACCESSED BY:
// 1. $_REQUEST : CAN BE USED FOR BOTH get AND post METHOD
// 2. $_POST : CAN BE USED ONLY FOR post METHOD
// 3. $_GET : CAN BE USED ONLY FOR get METHOD

if(isset($_POST['save_registration']))
{
	//print_r($_POST);
	$sql = "INSERT INTO registration(student_name, uniform_body, association_club, sport_game) VALUES('".addslashes($_POST['student_name'])."', '".addslashes($_POST['uniform_body'])."', '".addslashes($_POST['association_club'])."', '".addslashes($_POST['sport_game'])."')";
	$conn->query($sql);
}

?>


<!DOCTYPE html>
<html>
	<head>

		<title>KORCLICK | Registration</title>
	
	<style>
	.error {color: #FF0000;}
	</style>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/webp" href="images/index/logo sekolah.webp"/>	
	<link rel="stylesheet" href="css/click button.css">
	
	<style type="text/css">* {cursor: url(https://cur.cursors-4u.net/cursors/cur-9/cur270.cur), auto !important;}</style>
	
	<style>
		/* Style inputs */
	  input[type=text], select {
	  width: 100%;
	  padding: 10px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}

	/* Style the submit button */
	input[type=submit] {
	  width: 100%;
	  background-color: #396F7C;
	  color: white;
	  cursor: pointer;
	}

	/* Add a background color to the submit button on mouse-over */
	input[type=submit]:hover {
	  background-color: black;
	}
	</style>
	
	
	
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
		</style>	

		<style>
		.container {
		width: 500px;
		text-align: center;
		margin-left: auto;
		margin-right: auto;
		}
		</style>
				
		
		<!--
		<style>
		#form {
			width: 50%;
		}
		</style>
		-->
		
		
			<link rel="stylesheet" href="css/top button.css">
			
			<script type="text/javascript" src="js/top button.js"></script>		

			<script type="text/javascript">
				function clicked() {
				   if (confirm('Do you want to submit?')) {
					   yourformelement.submit();
				   } else {
					   return false;
				   }
				}

			</script>
			
	</head>
	
	<body class="w3-black">
	
	<!-- Icon Bar (Sidebar - hidden on small screens) -->
	<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
	  <!-- Avatar image in top left corner -->
	  <img src="images/logo korclick.png" style="width:100%">
	  
	  <a href="#reg" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
		<i class="fa fa-eye w3-xxlarge"></i>
		<p>REGISTRATION</p>
	  </a>
	  	  
	</nav>

	<!-- Navbar on small screens (Hidden on medium and large screens) -->
	<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
	  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
		<a href="#reg" class="w3-bar-item w3-button" style="width:25% !important">REGISTRATION</a>

	  </div>
	</div>


 <div class="w3-padding-64 w3-content" id="reg">
    <center><h2 class="w3-text-black"><font size="6px" face="serif"><b>CO-CURRICULUM REGISTRATION</b></font></h2>
    <hr style="width:200px" class="w3-opacity">
	
		<div class='container'>
		<form action="" method="post">
			<div><font color="black" size="5px"face="serif">Student Name: <input class="w3-input w3-padding-10" type="text" name="student_name" value="" required name="Email"/></font></div>
			<div><font color="black" size="5px"face="serif"> Uniform Body:<select class="w3-input w3-padding-10" type="text" name="uniform_body" value="" required name="Subject">
				<option>-Select-</option>
				<option>Pandu Puteri</option>
				<option>Kadet Remaja Sekolah</option>
				<option>Kadet Polis</option>
				<option>Kadet Bomba</option>
				<option>Jabatan Pertahanan Awam Malaysia</option>
				<option>Persatuan Bulan Sabit Merah</option>
				<option>Puteri Islam</option>
			  </select>
			</font></div>
			
			<div><font color="black" size="5px"face="serif"> Association Club:<select class="w3-input w3-padding-16"type="text" name="association_club" value="" required name="Message">
				<option>-Select-</option>
				<option>Photography</option>
				<option>Skim Pemulangan Buku Teks</option>
				<option>Kelab Bahasa Melayu</option>
				<option>Kelab Bahasa Inggeris</option>
				<option>Ekonomi Rumah Tangga</option>
				<option>Anti Dadah</option>
				<option>Koperasi</option>
				<option>Kelab Sains</option>
				<option>Kelab Matematik</option>
				<option>Silat</option>
				<option>Taekwondo</option>
				<option>Pencinta Alam</option>
			  </select>			
			</font></div>
			
			<div><font color="black" size="5px"face="serif"> Sport and Game: <select class="w3-input w3-padding-16"type="text" name="sport_game" value="" required name="Message">
				<option>-Select-</option>
				<option>Badminton</option>
				<option>Hoki</option>
				<option>Bola Jaring</option>
				<option>Catur</option>
				<option>Bola Tampar</option>
				<option>Bola Baling</option>
				<option>Bola Sepak</option>
				<option>Sepak Takraw</option>
				<option>Petanque</option>
				<option>Congkak</option>
				<option>Frisbee</option>
				<option>Lempar Cakera</option>
				<option>Pingpong</option>
			  </select>			
			</font></div>
			
			<br>
		
			<div><button><input class="w3-button w3-grey w3-padding-large" type="submit" onclick="clicked();" name="save_registration" value="Submit" /></button></div>
			
		</form>
		
		</div>
		

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