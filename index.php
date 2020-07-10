<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>IUS test system</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #95a5a6">

	<div id="main-wrapper">
		<center><h2 class="login">Login</h2></center>
		<center><img class="logo" src="img/devius.jpg"></center>



	

	<form class="main_form" action="index.php" method="post">

		<label><b>Username:</label><br>
		<input name="username" type="text" class="inputval" placeholder="Type your username"> <br>
		<label><b>Password:</label><br>
		<input name="password" type="password" class="inputval" placeholder="Type your password"><br>
		<input name="login" type="submit" id="login-button" value="Login"><br>
		<a href="register.php"><input type="button" id="register-button" value="Register"></a>
		
	</form>

	<?php
		if(isset($_POST['login'])){

			if($_POST['username']==""||$_POST['password']==""){
				echo '<script type="text/javascript"> alert("Invalid username or password") </script> ';
			}else{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = "select * from user WHERE username= '$username' AND password='$password'";
			$query_run = mysqli_query($con,$query);

			if(mysqli_num_rows($query_run)>0){
				$_SESSION['username'] = $username;

				header('location: homepage.php');

				
			}else{
				echo '<script type="text/javascript"> alert("Invalid username or password") </script> ';
			}
		}
	}
	?>
	</div>

</body>
</html>