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

if(isset($_POST['save_contact']))
{
	//print_r($_POST);
	$sql = "INSERT INTO contact(name, email, subject, message) VALUES('".addslashes($_POST['name'])."', '".addslashes($_POST['email'])."', '".addslashes($_POST['subject'])."', '".addslashes($_POST['message'])."')";
	$conn->query($sql);
}

?>

<html>
	<head>
	
		<title>KORCLICK | Contact Us</title>
 

			
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			
			<link rel="icon" type="image/webp" href="images/index/logo sekolah.webp"/>
			
			<link rel="stylesheet" href="css/top button.css">
			
			<script type="text/javascript" src="js/top button.js"></script>		
			
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">		
			
			<link rel="stylesheet" href="css/navbar.css">
		
				
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
			
			<style type="text/css">* {cursor: url(https://cur.cursors-4u.net/cursors/cur-9/cur270.cur), auto !important;}</style>
			<a href="https://www.cursors-4u.com/cursor/2011/12/01/light-brown-pointer.html" target="_blank" title="Light Brown Pointer">
			<img src="https://cur.cursors-4u.net/cursor.png" border="0" alt="Light Brown Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>
			
			<link rel="stylesheet" href="css/footer.css">
			
			 
			   <style>
				body {
				 background-image: url('images/wallpaper4.png');
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
			<body link="#D39CDF" alink="#D39CDF" vlink="#D39CDF">
	<br>
	<br>	
	<br>
	<br>
	<br>
	
		<p align="center">
		<img src="images/index/logo sekolah.webp" width="180px">  
		</p>
		

		
		  <!-- Contact Section -->

		  <p align="center">
		  <div class="w3-padding-64 w3-content w3-text-black">
			<center><h2 class="w3-grey"><font face="serif">Contact Us</font></h2>
			<hr style="width:200px" class="w3-opacity">

			<div class="w3-section">
			  <p><i class="fa fa-map-marker fa-fw w3-text-black w3-xxlarge w3-margin-right"></i><font face="serif" size="5">Smk (P) Kapar, Persiaran Hamzah Alang, Taman Intan, <br> 42200 Klang, Selangor</font></p>
			  <p><i class="fa fa-phone fa-fw w3-text-black w3-xxlarge w3-margin-right"></i><font face="serif" size="5"> Phone: +03-3250 6565</font></p>
			  <p><i class="fa fa-envelope fa-fw w3-text-black w3-xxlarge w3-margin-right"> </i><font face="serif" size="5"> Email: semekar@edu.my</font></p>
			</div><br>
			<p><font face="serif" size="5">Send us message:</font></p>
			
		</div>
		

		<div class='container'>
		<form action="" method="post">
			<div><font face="serif" size="4"> Name: <input class="w3-input w3-padding-10" type="text" name="name" value="" required name="Name"/></font></div>
			<div><font face="serif" size="4"> Email: <input class="w3-input w3-padding-10" type="text" name="email" value="" required name="Email"/></font></div>
			<div><font face="serif" size="4"> Subject: <input class="w3-input w3-padding-10" type="text" name="subject" value="" required name="Subject"/></font></div>
			<div><font face="serif" size="4"> Message: <input class="w3-input w3-padding-16"type="text" name="message" value="" required name="Message"/></font></div>
			<div><button><input class="w3-button w3-grey w3-padding-large" type="submit" onclick="clicked();" name="save_contact" value="Submit" /></button></div>
			
		</form>
		
		</div>

		
			<nav class="fixed-nav-bar"> 
				 <p align="center">
	  
					<div class="pill-nav" align= "center">
						<a href="index.php"><font face="serif" size="4">Home</font></a>
						<a href="login.php"><font face="serif"size="4">Log In</font></a>
						<a href="contact us.php"><font face="serif"size="4">Contact us</font></a>
					</div>
			</nav> 
		
		<br>
		<br>
		
				<div class="box" 
					<button onclick="topFunction()" 
					id="myBtn" title="Go to top"><font face="serif">Top</font></button>
                    <script src="js/top button.js"></script>
					
				</div>		

	
					<footer class="footer-distributed">

	
				<p align="center" class="footer-company-name"><font face="serif"color="black">© 2022 SEMEKAR all rights reserved.</font></p>
				</footer>	
			
			</body>
			
</html>