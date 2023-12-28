<?php 
	$host='127.0.0.1';
	$user='root';
	$pass='';
	$db='resume_builder';

	$conn=mysqli_connect($host,$user,$pass);

		if($conn)
			{
				if(mysqli_select_db($conn,$db))
				echo ' ';
			}
				else
				{
					echo 'error';
	
				}
	
?>
