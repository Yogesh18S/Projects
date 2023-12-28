<?php include('header.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Make It Easy</title>
 
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    </script></head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    

<div class="container-fluid">
  <div class="row content1">
    <div class="col-sm-3 sidenav">
      <h3>Register ?</h3>
      <h5>Sign up, Now It's easy & free</h5 >
      <form id="login-form" method="post" action="insert.php">
		                <div class="modal-body">
				    		<input id="login_username" class="form-control" name="email" type="text" placeholder="E-mail" required><br>
				    		<input id="login_password" class="form-control" name="password" type="password" placeholder="Password" required><br>
                            <input id="login_password" class="form-control" name="contact" type="text" placeholder="Contact no." required>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Accept all terms & conditions
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up!</button>
                            </div>
				    	  
				        </div>
                    </form>
                     
    </div>

    <div class="col-sm-9">
    <div class="container-fluid">
    
      <!-- BEGIN # BOOTSNIP INFO -->

<!-- END # BOOTSNIP INFO -->

<!-- BEGIN # MODAL LOGIN -->
		
		
		

    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-responsive" id="img_logo"  src="images/main_logo.png">
					<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    Close
					</button> -->
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form" method="POST" action="connectivity.php"> 
						<div class="modal-body">
						<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your username and password.</span>
                        </div><br>
							
							
							<input type="text" id="login_username" class="form-control"  name="user" placeholder="Username"><br> 
							<input type="password" id="login_password"  class="form-control" name="pass" placeholder="Password"><br> 
							
							<div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
        		    	
						
							<input id="button" class="btn btn-primary btn-lg btn-block"  type="submit" name="submit" value="Log-In">
						</div>	
						
					</form>
					
					
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Type your e-mail.</span>
                            </div>
		    				<input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
    </div>
    <!-- END # MODAL LOGIN -->
	<div class="clearing"></div>
<footer class="footer">
  <p align="center">About Us | Contact Us <br> Copyright @ 2016</p>
</footer> 
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
</body>
</html>
