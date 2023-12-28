<?php session_start();
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'resume_builder'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD','');

	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($con));
	$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));  $ID = $_POST['user']; $Password = $_POST['pass']; 

	

			
	
	if(isset($_POST['submit']))
		{ 
			if(!empty($_POST['user'])) 
			{	 
				//echo $_POST['pass'];
				//echo "SELECT * FROM login where email = '".$_POST['user']."' AND password = '".$_POST['pass']."'";
				$query = mysqli_query($con,"SELECT * FROM login where email = '".$_POST['user']."' AND password = '".$_POST['pass']."'");
				
				$row = mysqli_fetch_array($query); 
					
					if($row['email']!="") 
						{
							$_SESSION['email'] = $row['email']; 
							header('location:personal.php');
							
							echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..	."; 
						}else{
								header('location:index.php');
								echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
						}
			}else{
				header('location:index.php');
			}		
		} 

		else{header('location:index.php');}?>
