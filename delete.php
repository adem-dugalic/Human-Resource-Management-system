	<?php

	require 'dbconfig/config.php';

?>

	<?php
	if(isset($_GET['to_delete'])){
		$key=$_GET['to_delete'];
		$check=mysqli_query($con,"SELECT * from employee where id= '$key' ") or die("not found".mysql_error());
		if(mysqli_num_rows($check)>0){
			$res = mysqli_query($con, "DELETE from employee where id= '$key' ") or die("not found".mysql_error());
		}else{

			echo '<script type="text/javascript"> alert("Error nothing in table") </script> ';
		}
		header('location:table.php');
	}

	?>