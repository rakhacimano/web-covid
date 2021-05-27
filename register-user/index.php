<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | Karantina.in</title>
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
			<form action="proses-register.php" method="post">
				<img src="img/user.svg">
				<h2 class="title">Sign Up</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   	<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
					</div>

					<div class="input-div two">
           		   <div class="i">
           		   	<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" name="email">
           		   </div>
					</div>
					  
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
               </div>
               <a href="../login-user">Have an account? Log in</a>
            	<!-- <a href="#">Forgot Password?</a> -->
            	<input type="submit" class="btn" value="Sign Up" name="submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
