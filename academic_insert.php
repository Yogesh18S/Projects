<?php include('connect.php');
session_start();
 $a1 = $_POST['a1'];
 $a2 = $_POST['a2']; 
 $a3 = $_POST['a3']; 
 $a4 = $_POST['a4']; 
 $a5 = $_POST['a5'];
 $a6 = $_POST['a6']; 
 
	
  

 $email=$_SESSION['email'];



	$sql = "INSERT INTO academic(email, board_university, school_college, course, yop, per_cgpa, divison)
			VALUES ('$email', '$a1', '$a2', '$a3', '$a4', '$a5', '$a6')";
	$sql=mysqli_query($conn,$sql) or die(mysqli_error($conn));
				echo "New record created successfully";
				header('location:professional.php');
		mysqli_close($conn);
?>
