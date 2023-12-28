<?php include('connect.php');
session_start();
 $s1 = $_POST['s1'];
 

 $email=$_SESSION['email'];


	$sql = "INSERT INTO skill_info(email, key_skills)
			VALUES ('$email','$s1')";
	$sql=mysqli_query($conn,$sql) or die(mysqli_error($conn));
				echo "New record created successfully";
				header('location:download.php');
		mysqli_close($conn);
?>
