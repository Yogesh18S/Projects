<?php include('connect.php');
session_start();
 $c1 = $_POST['c1'];
 $c2 = $_POST['c2']; 
 $c3 = $_POST['c3']; 
 $c4 = $_POST['c4']; 
 $c5 = $_POST['c5']; 
 $c6 = $_POST['c6']; 
 $c7 = $_POST['c7']; 
 $c8 = $_POST['c8']; 
 $c9 = $_POST['c9']; 
 $c10 = $_POST['c10']; 

 $email=$_SESSION['email'];


	$sql = "INSERT INTO contact_info(email, contact_no, house_no, street, pin_code, postoffice, city, district, state, country, date_of_entry)
			VALUES ('$email','$c1', '$c2', '$c3', '$c4', '$c5', '$c6', '$c7', '$c8', '$c9', '$c10')";
	$sql=mysqli_query($conn,$sql) or die(mysqli_error($conn));
				echo "New record created successfully";
				header('location:academic.php');
		mysqli_close($conn);
?>
 