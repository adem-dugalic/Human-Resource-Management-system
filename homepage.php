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
			<?php
			date_default_timezone_set('Europe/Sarajevo');
			//$timestamp = time();
			$date_time = date("Y-m-d");
			echo "Current date and local time is $date_time";
			$datumIsteka=mysqli_query($con,"SELECT datumIstekaUg FROM employee");
			$treba=false;
			while($b=mysqli_fetch_array($datumIsteka)){
				$mj=substr($b[0],5,2);
				$go=substr($b[0],0,4);
				$tgo=date("Y");
				$tmj=date("m");
				//echo $go." ".$mj." ". $tgo." ".$tmj."\n";
				if($tgo==$go && $mj-$tmj<7 || $go==$tgo+1 && $mj+12-$tmj<7)
					$treba=true;
			}
			if($treba)
				echo '<script type="text/javascript"> alert("Contract needs to be renewed") </script> ';
			?>
			

		<center><h2 class="login">Home page</h2></center>
		<center><h3 class="login1">Welcome 
			<?php echo $_SESSION['username'] ?></h3></center>

		<center><img class="logo" src="img/devius.jpg"></center>

	<form class="main_form" action="homepage.php" method="post">
		<a href="newEmployee.php"><input name="AddEmp" type="button" id="add-button" value="Add New Employee"></a><br>
		<a href="table.php"><input name="tabela" type="button" id="add-button" value="View"></a><br>
		<input name="logout" type="submit" id="logout-button" value="Log Out"><br>

	</form>

	<?php
		if(isset($_POST['logout'])){
		session_destroy();
		header('location: index.php');
	}
	?>
	</div>

</body>
</html>