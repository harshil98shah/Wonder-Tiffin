<?php  session_start();
		session_unset();
		session_destroy();
		include 'db_con.php';
  ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login &amp; Register Templates</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">


    </head>

    <body style="background-color:#b06ab3">

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Admin Login</strong></h1>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                        	<div class="form-box" style="margin-left:350px; width: 100%;">
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
				                        	<input type="text" name="uname" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <input type="submit" class="btn" name="submit" >
										</br></br>
<?php
			session_start();
		if(isset($_POST['submit']))
		{	 
			
			
			$uname=$_POST['uname'];
			$password=$_POST['password'];

			$sql="SELECT * FROM `admin` WHERE `uname`='$uname' and `password`='$password'";
			$res=mysqli_query($con,$sql);

			while($row=mysqli_fetch_assoc($res))
				{
					$mid= $row["uname"];
				}
				$nr=mysqli_affected_rows($con);

				$row=mysqli_fetch_assoc($res);
				if($nr==1)
				{
					$_SESSION['uname'] = $uname;
					$r=$mid;
					$msg=$_POST['uname'];

					header("Location:http://localhost/wonder tiffin/Admin/index.php");
				}
				else
				{
					$msg= 'Wrong username or password';
				}
		}


?>


									<?php
										if(isset($_POST['submit']))
										{
											echo "<strong style='color:red'>".$msg."</strong>";
										}
									?>
				                    </form>
			                    </div>
		                    </div>
                    </div>

                </div>
            </div>

        </div>




        <!-- Footer -->


        <!-- Javascript -->
      <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>-->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
