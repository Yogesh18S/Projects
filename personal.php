<?php session_start();

if(isset($_SESSION['email'])){
  include('header.php');
    include('connect.php');
	$email=$_SESSION['email'];

		
		$sql=mysqli_query($conn,"SELECT email from login") or die(mysqli_error($conn));
		$result=mysqli_fetch_assoc($sql);
		
?>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ONLINE RESUME BUILDER</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="personal.php">Personal Info</a></li>
        <li><a href="contact.php">Contact Info</a></li>
        <li><a href="academic.php">Acadamic Info</a></li>
        <li><a href="professional.php">Professional Info</a></li>
        <li><a href="master.php">Resume Info</a></li>
        <li><a href="skills.php">Skill Info</a></li>
     
        
      </ul>
     <ul class="nav navbar-nav navbar-right">
       
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center"> 
  <div class="row content">
<div class="col-sm-2 sidenav"><br>
      <p><h5>Previous steps are successfully done!! please enter further information!</h5></p>
    </div>
    <div class="col-sm-8 text-left">
      <h1 align="center"> Step 1  (Personal Information)</h1>
      <form id="login-form" method="POST" action="insert_personal.php">
		                <div class="modal-body">
				    		<input id="login_username" class="form-control" type="text" placeholder="First Name" required      name="personal"><br>
				    		<input id="login_password" class="form-control" type="text" placeholder="Middle Name" required     name="personal2"><br>
                            <input id="login_password" class="form-control" type="text" placeholder="Last Name" required       name="personal3"><br>
                            <input id="login_username" class="form-control" type="Date" placeholder="Date Of Birth" required   name="personal4"><br>
				    		<input id="login_password" class="form-control" type="text" placeholder="Gender" required          name="personal5"><br>
                            <input id="login_password" class="form-control" type="text" placeholder="Maritial Status" required name="personal6"><br>
                            <input id="login_username" class="form-control" type="text" placeholder="Nationality" required     name="personal7"><br>
                            <input id="login_password" class="form-control" type="text" placeholder="Father's Name" required   name="personal8"><br>
                            <input id="login_username" class="form-control" type="text" placeholder="Mother's Name" required   name="personal9"><br>
				    		<input id="login_password" class="form-control" type="Date" placeholder="Date Of Entry" required   name="personal10"><br>
                           

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Accept all terms & conditions
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Next</button>
                            </div>
				    	  
				        </div>
                    </form>
      
    </div>
    <div class="col-sm-2 sidenav">
      <div class=>
        <img class="img-responsive id="img_logo" " src="images/main_logo.png">
      </div>
      <div class="well">
        
      </div>
    </div>
  </div>
</div> 

<footer class="footer">
  <p align="center">About Us | Contact Us <br> Copyright @ 2016</p>
</footer>

</body>
</html>
<?php
	} else {
		header("Location: index.php");
	}
	?>
