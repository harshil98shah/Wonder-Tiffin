<!DOCTYPE html>
<?php
   			session_start();
				
					
				
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chef Login &amp; Register </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

    <body style="background-color:lightgreen">

        <!-- Top content -->
        <div class="top-content" >

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Chef Login &amp; Register Forms</strong></h1>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">

                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form name="form"  method="post" class="login-form" >
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
				                        </div>
				                        <input type="submit" class="btn" name="submit"></br></br>

<?php
				include "db_con.php";
						
			if(isset($_POST['submit']))
			{
					$emailid1=$_POST['username'];
					$_SESSION['uname']=$emailid1;
					$password1=$_POST['password'];
					$sql="SELECT * FROM `member_info` WHERE `emailid1`='".$emailid1."' and `password1`='".$password1."' AND type1='chef' AND status='Active'";
					$res=mysqli_query($con,$sql);

					$nr=mysqli_affected_rows($con);

					while($row=mysqli_fetch_assoc($res))
					{
						$m=$row['cid'];
						$status=$row['status'];
						
					}
					//echo "<b>$m</b>";
						$row=mysqli_fetch_assoc($res);

						if($nr==1)
						{
							$_SESSION['valid'] = true;
							
							$_SESSION['username'] = $emailid1;
							$_SESSION['cid'] = $m;
							$msg=$_POST['username'];
							if($status=='Active')
							{
								echo "<script>document.location='index.php'</script>";
								//header("Location:http://localhost/wonder tiffin/chef/index.php");
							}
							else
							{
								echo "<script> alert('This Account has been Blocked by Administrator!!!') </script>";
							
							}
						}
						else
						{
							echo "<script> alert('Wrong username or password') </script>";
							
						}
			}			
			
		
?>
</form>
</div>
</div>
</div>
     <div class="col-sm-1 middle-border"></div>
       <div class="col-sm-1"></div>
         <div class="col-sm-5">
         	<div class="form-box">
        		<div class="form-top">
             		<div class="form-top-left">
              			<h3>Sign up now</h3>
                     		<p>Fill in the form below to get instant access:</p>
                	</div>
	                <div class="form-top-right">
	                	<i class="fa fa-pencil"></i>
	                </div>
	            </div>
	                            <div class="form-bottom">
				                    <form role="form" method="post" action="login1.php" class="registration-form" enctype="multipart/form-data">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="fname" placeholder="First name..." class="form-first-name form-control" id="fname1">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="lname" placeholder="Last name..." class="form-last-name form-control" id="lname1">
				                        </div>
										
										<div class="form-group">
											<label class="sr-only" for="form-last-name">Upload Image</label>
											<input type="file" class="form-control" name="image"   class="form-last-name form-control" id="image1" >
										</div>

										<div class="form-group">
				                        	<label class="sr-only" for="form-gender">gender</label>
				                        	<input type="radio" name="gender"  value="m" placeholder="Male..." id="gender1">Male
											<input type="radio" name="gender" value="f" placeholder="Female..." id="gender1">Female
				                        </div>

										<div class="form-group">
				                        	<label class="sr-only" for="form-city">City</label>
				                        	<input type="text" name="city" placeholder="City..." class="form-city form-control" id="city1" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-address">Address</label>
				                        	<textarea name="address" placeholder="Address..."
				                        				class="form-address form-control" id="address1" required></textarea>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-pincode">Pincode</label>
				                        	<input type="text" name="pincode" placeholder="Pincode..." class="form-pincode form-control" id="pincode1" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-mobno">Mobile No</label>
				                        	<input type="text" name="mobno" placeholder="Mobile No..." class="form-mobno form-control" id="mobno1">
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-emailid">Email Id</label>
				                        	<input type="text" name="emailid" placeholder="Email Id..." class="form-first-name form-control" id="emailid1">
				                        </div>


				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password1" required>
				                        </div>

										
										

				                       <center> <input type="submit" class="btn" value="Sign me up!" name="insert"></center>


									</br></br>
								</div>   


</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Footer -->
<!-- Javascript -->
       <!--<script src="assets/js/jquery-1.11.1.min.js"></script>-->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
