<?php include('connect.php');
session_start();
 $m1 = $_POST['m1'];
 $m2 = $_POST['m2']; 
 $m3 = $_POST['m3']; 
 $m4 = $_POST['m4'];
 
 $email=$_SESSION['email'];


	$sql = "INSERT INTO resume_info(email, objectives, career_growth, declearation, strength)
			VALUES ('$email','$m1', '$m2', '$m3', '$m4')";
	$sql=mysqli_query($conn,$sql) or die(mysqli_error($conn));
				echo "New record created successfully";
				header('location:skills.php');
		mysqli_close($conn);
?>
