<?php  

session_start();

if (isset($_SESSION['username'])) {
	header("location: ../tujuan-user");

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login-User | E-Karantina</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wavefixx.png">
	<div class="container">
		<div class="img">
			<img src="img/karantina.svg">
		</div>
		<div class="login-content">
			<form action="cek-login.php" method="post">
				<img src="img/user.svg">
				<h2 class="title">Hai, User</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username or email</h5>
           		   		<input type="text" class="username input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="password input" name="password"> 
            	   </div>
					</div>
               <a href="../register-user">Belum daftar? Sign up</a>
            	<!-- <a href="#">Forgot Password?</a> -->
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
