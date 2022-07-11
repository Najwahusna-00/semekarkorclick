<!DOCTYPE html>
<html>
	<head> <title>KORCLICK | Student Login</title>
		<meta charset="utf-8"/>
		<title>Login</title>
		<link rel="stylesheet" href="style2.css"/>
		<link rel="icon" type="image/webp" href="images/index/logo sekolah.webp"/>
		<link rel="stylesheet" href="css/navbar.css">
		
		<link rel="stylesheet" href="css/top button.css">
			
		<script type="text/javascript" src="js/top button.js"></script>			
		<style>

body{
		background-image: url('images/wallpaper.png');
		background-repeat: no repeat;
		background-attachment: fixed;
		background-size: 100%;
	}
	  
</style>

	</head>
	<body>
	
				<nav class="fixed-nav-bar"> 
				 <p align="center">
	  
					<div class="pill-nav" align= "center">
						<a href="index.php"><font face="serif" size="4">Home</font></a>
						<a href="login.php"><font face="serif"size="4">Log In</font></a>
						<a href="contact us.php"><font face="serif"size="4">Contact us</font></a>
					</div>
			</nav> 
	

	<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `student` WHERE username='$username'
                     AND password='" . ($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo
                  "<script type='text/javascript'>alert('INCORRECT USERNAME OR PASSWORD!'); window.location.href = 'studentlogin.php';</script>";
        }
    } else {
?>

<br>
<br>

<p align="center">
<img src="images/korclick.png" width="270px"> 
</p>


	<form class="form" method="post" name="login">
        <h1 class="login-title">Student Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        

	</div>
	</div>
	<br>
		
		<input type="submit" value="Login" name="submit" class="login-button"/>

	</form>
  <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script> 
  
<?php
    }
?>

				<div class="box" 
					<button onclick="topFunction()" 
					id="myBtn" title="Go to top"><font face="serif">Top</font></button>
                    <script src="js/top button.js"></script>
					
				</div>
				
</body>
</html>