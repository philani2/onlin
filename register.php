<?php  
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>


<html>
<head>
	<title>Welcome online Shop</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	
	
</head>
<body>

	<div class="wrapper">

		<div class="login_box">

			<div class="login_header">
				<h1>Shop with us!!!</h1>
				Login or sign up below!
			</div>
			<br>
			<div id="first">

				<form action="register.php" method="POST">
					<input type="email" name="log_email" placeholder="Email Address" value="<?php 
					if(isset($_SESSION['log_email'])) {
						echo $_SESSION['log_email'];
					} 
					?>" required>
					<br>
					<input type="password" name="log_password" placeholder="Password">
					<br>
					<?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
					<input type="submit" name="login_button" value="Login">
					<br>
					<a href="reg.php" id="signup" class="signup">Need and account? Register here!</a>

				</form>

			</div>

			<div id="second">

				
			</div>

		</div>

	</div>


</body>
</html>