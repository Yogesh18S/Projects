<?php session_start();

	if(isset($_SESSION['email'])){
	include('header.php');
	include('connect.php');
	$email=$_SESSION['email'];

		
		$sql=mysqli_query($conn,"SELECT email from Login") or die(mysqli_error($conn));
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
         <li><a href="personal.php">Personal Info</a></li>
        <li><a href="contact.php">Contact Info</a></li>
        <li ><a href="academic.php">Acadamic Info</a></li>
        <li><a href="professional.php">Professional Info</a></li>
        <li><a href="master.php">Resume Info</a></li>
        <li  class="active"><a href="skills.php">Skill Info</a></li>
     
     
        
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
    <div class="col-sm-8 text-center">
      <h1> Step 6  (Skill'ss Information)</h1>
      <form id="login-form" method="post" action="skills_insert.php">
		                <div class="modal-body">
  			
				<input id="login_username" class="form-control" type="text" placeholder="key Skills" name="s1" required><br>
                        	
			  <div class="checkbox">

                                
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
