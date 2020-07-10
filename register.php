<?php

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
		<center><h2 class="login">Register</h2></center>
		<center><img class="logo" src="img/devius.jpg"></center>



	

	<form class="main_form" action="register.php" method="post">

		<label><b>Username:</label><br>
		<input name="username" type="text" class="inputval" placeholder="Type your username" required/> <br>
		<label><b>Password:</label><br>
		<input name="password" type="password" class="inputval" placeholder="Type your password" required/><br>
		<label><b>Confirm Password:</label><br>
		<input name="cpassword" type="password" class="inputval" placeholder="Cnofirm your password" required/><br>
		<input name="submit_btn" type="submit" id="signup-button" value="Sign Up"><br>
		<a href="index.php"><input type="button" id="back-button" value="Back to login"></a>
		
	</form>

	<?php

	if(isset($_POST['submit_btn'])){

		//echo '<script type="text/javascript"> alert("Sign up button clicked") </script> ';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		if($password == $cpassword){

			$query = "select * from user WHERE username= '$username' ";

			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0){
				echo '<script type="text/javascript"> alert("Username taken") </script> ';
			}else{
				$query = "insert into user values ('$username','$password') ";
				$query_run = mysqli_query($con,$query);
				if($query_run){
					echo '<script type="text/javascript"> alert("Registration complete go to login page") </script> ';
				}else{
					echo '<script type="text/javascript"> alert("Error") </script> ';
				}
			}
		}else{
			echo '<script type="text/javascript"> alert("Error, no match") </script> ';
		}
	}

	?>
	</div>

</body>
</html>