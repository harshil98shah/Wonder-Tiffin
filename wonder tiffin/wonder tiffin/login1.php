<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>	
		<title></title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500' ' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
		<!--webfonts-->

	</head>
	<body>	
			<!--start-login-form-->
				<div class="main">
			    	<div class="login-head">
					    <h1> Login & Register forms</h1>
					</div>
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span>REGISTER</h2>
						 	 </div>
						  	<form action="customer_add.php" method="post">
	
							<input type="text" placeholder="Enter First Name" name="fname" required></br></br>
							<input type="text" placeholder="Enter Last Name" name="lname" required></br></br>
	
							<h2>Gender</h2>
							<input type="radio" name="gender"  value="m" id="gender1">Male
							<input type="radio" name="gender" value="f"  id="gender1">Female </br></br>

							<input type="text" placeholder="Enter Address" name="address" required> </br></br>
							<input type="text" placeholder="Enter Pincode" name="pincode" required> </br></br>
							<input type="text" placeholder="Enter City" name="city" required> </br></br>
							<input type="text" placeholder="Enter Contact No" name="mobno" required> </br></br>
							<input type="text" placeholder="Enter Email" name="emailid" required> </br></br>
							<input type="password" placeholder="Enter Password" name="password" required> </br></br>
							
    
							<div class="Remember-me">
								<div class="submit">
									<input name="insert" type="submit" onclick="myFunction()" value="Sign Me Up >" >
								</div>
									<div class="clear"> </div>
							</div>
											
						</form>
					</div>
<?php
        include('db_con.php');
        
        
 ?>
					<div class="Login">
							<div class="Login-head">
						    	<h3>LOGIN</h3>
						 	</div>

						<form action="log.php">
								<div class="ticker">
									<h4>Username</h4>
						  			<input type="text"  placeholder="Enter Username" name="uname" required> 
						  			<div class="clear"> </div>
						  		</div>
						  		<div>
						  		<h4>Password</h4>
								<input type="password"  placeholder="Enter Password" name="psw" required >
								  <div class="clear"> </div>
								</div>
								<div class="checkbox-grid">
									<div class="inline-group green">
									<label class="radio"><input type="radio" name="radio-inline"><i> </i>Remember me</label>
									<div class="clear"> </div>
									</div>

								</div>
												 
								<div class="submit-button">
									<input type="submit" onclick="myFunction()" value="LOGIN  >" >
								</div>
									<div class="clear"> </div>
					</div>
											
						  </form>
					</div>
			</div>
	</body>
</html>


