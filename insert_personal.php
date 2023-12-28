<?php include('connect.php');
session_start();
 $personal = $_POST['personal']; 
 $personal2 = $_POST['personal2']; 
 $personal3 = $_POST['personal3']; 
 $personal4 = $_POST['personal4']; 
 $personal5 = $_POST['personal5']; 
 $personal6 = $_POST['personal6']; 
 $personal7 = $_POST['personal7']; 
 $personal8 = $_POST['personal8']; 
 $personal9 = $_POST['personal9']; 
 $personal10 = $_POST['personal10'];
 $email=$_SESSION['email'];


	$sql = "INSERT INTO personal_info(fname,email, mname, lname, dob, gender, maritial_status, nationality, father_name, mother_name, date_of_entry )
			VALUES ('$personal','$email', '$personal2', '$personal3', '$personal4', '$personal5', '$personal6', '$personal7', '$personal8', '$personal9', '$personal10')";
	$sql=mysqli_query($conn,$sql) or die(mysqli_error($conn));
				echo "New record created successfully";
				header('location:contact.php');
		mysqli_close($conn);
?>
