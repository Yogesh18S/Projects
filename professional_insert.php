<?php include('connect.php');
session_start();
 $p1 = $_POST['p1'];
 $p2 = $_POST['p2']; 
 $p3 = $_POST['p3']; 
 $p4 = $_POST['p4']; 
 $p5 = $_POST['p5']; 
  

 $email=$_SESSION['email'];


	$sql = "INSERT INTO professional_info(email, company_name, designation, date_of_joining, date_of_leaving, responsibilities)
			VALUES ('$email','$p1', '$p2', '$p3', '$p4', '$p5')";
	$sql=mysqli_query($conn,$sql) or die(mysqli_error($conn));
				echo "New record created successfully";
				header('location:master.php');
		mysqli_close($conn);
?>
