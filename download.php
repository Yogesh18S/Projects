<?php session_start();

	if(isset($_SESSION['email'])){
	include('header.php');
	include('connect.php');

	$email=$_SESSION['email'];

		
		$sql=mysqli_query($conn,"SELECT * from login,personal_info,academic,contact_info,professional_info,resume_info,skill_info") or die(mysqli_error($conn));
		$result=mysqli_fetch_assoc($sql);
		// print_r($result);		
?>

 <div class="col-sm-9">
    <div class="container-fluid">
		<h2><?php echo $result['fname']." ".$result['mname']." ".$result['lname'];?></h2>
		<p><b>Contact No. </b><?php echo $result['contact_no'];?></p>
		<p><b>E-mail. </b><?php echo $result['email'];?></p>
		<hr>
		
		<p><h4>Carrer Objectives</h4>
			<?php echo $result['objectives'];?></p>
		<p><h4>Carrerr Growth </h4>
			<?php echo $result['career_growth'];?></p>
		<p><h4>Educational Qualification </h4>
		
			<div style="overflow-x:auto;">
				
				<table border="1px;" width="100%">
					<tr>
						<th> Board & University </th>
						<th>School & College</th>
						<th>Year Of Passing</th>
						<th>Per & CGPA</th>
						<th>Division</th>
					</tr>
							<tr>
								<td><?php echo $result['board_university']?></td>
								<td><?php echo $result['school_college']?></td>
								<td><?php echo $result['yop']?></td>
								<td><?php echo $result['per_cgpa']?></td>
								<td><?php echo $result['divison']?></td>
							</tr>
						
				</table>
		
		
			</div><br>
			
					<p><h4>Professional Information </h4></P>
					<p><b>Company Name </b><?php echo $result['company_name'];?></p><br>
					<p><b>Designation </b><?php echo $result['designation'];?></p><br>
					<p><b>Date Of Joining </b><?php echo $result['date_of_joining'];?></p><br>
					<p><b>Date Of Leaving </b><?php echo $result['date_of_leaving'];?></p><br>
					<p><b>Responsibilities </b><?php echo $result['responsibilities'];?></p><br>
					
						<p><h4>Skill Information </h4></P>
							<p><b>Key Skills </b><?php echo $result['key_skills'];?></p><br>
							
							
								<p><h4>Personal Information </h4></P>
									<p><b>Date Of Birth </b><?php echo $result['dob'];?></p><br>
									<p><b>Gender </b><?php echo $result['gender'];?></p><br>
									<p><b>Maritial Status </b><?php echo $result['maritial_status'];?></p><br>
									<p><b>Nationality </b><?php echo $result['nationality'];?></p><br>
									<p><b>Father's Name </b><?php echo $result['father_name'];?></p><br>
									<p><b>Mother's Name </b><?php echo $result['mother_name'];?></p><br>
									
					
					<p><h4>Contact Information </h4></P>
						<p><b>House No. </b><?php echo $result['house_no'];?></p><br>
						<p><b>Street </b><?php echo $result['street'];?></p><br>
						<p><b>Pin Code </b><?php echo $result['pin_code'];?></p><br>
						<p><b>Post Office </b><?php echo $result['postoffice'];?></p><br>
						<p><b>City </b><?php echo $result['city'];?></p><br>
						<p><b>District </b><?php echo $result['district'];?></p><br>
						<p><b>State </b><?php echo $result['state'];?></p><br>
						<p><b>Country </b><?php echo $result['country'];?></p><br>
						
								
								<p><h4>Declearation</h4></P>
								<?php echo $result['declearation']?>
								
								
								<div style="overflow-x:auto;">
								
									<table>
									<tr>
										<th width="600">Date Of Entry</th>
										<th>Signature</th>
									</tr>
									
										<tr>
										<td><?php echo $result['date_of_entry']?></td>
										<td><p>_________________</p></td>
										
										</tr>
										</table>
								
								</div>
								
								
					
		
    </div>
</div>	
<a href="logout.php">logout</a>
<?php
	} else {
		header("Location: index.php");
	}
	?>
