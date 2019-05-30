<?php
 session_start(); 
		   if(!isset($_SESSION['username']))
		   {  header("Location:http:http://localhost/wonder tiffin/chef/login.php"); }
		 


$username=$_SESSION['username'];


include 'db_con.php';
$r=mysqli_query($con,"SELECT * FROM `member_info` WHERE `emailid1`='".$username."'");
$k=mysqli_fetch_assoc($r);
//var_dump($k);
?>

<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title><?php echo $k['fname1']; ?> Profile | chef | Wonder Tiffin</title>
	
	
</head>
<body>

	<div class="wrapper">

		<?php include 'Sidebar.php';?>

		<div class="main-panel">

			<?php include 'header.php';?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="update_profile.php">
                                    <div class="row">                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $k['fname1']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $k['lname1']; ?>">
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gender</label></br>
												
												<input type="radio" name="gender"  value="m" placeholder="Male..." id="gender1" <?php
												
												 echo ($k['gender1']=="m"?'checked':'');?>>Male
											
												<input type="radio" name="gender"  value="f" placeholder="FeMale..." id="gender1" <?php
												
												 echo ($k['gender1']=="f"?'checked':'');?>>Female
												
											  
				                        </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" name="address" value="<?php echo $k['address1']; ?>">
                                            </div>
                                        </div>
										
										<!--<div class="col-md-6">
                                            <div class="form-group">
                                               <label> Image</label>
													<input type="file" class="form-control" name="image" id="image1">
                                            </div>
                                        </div>-->
                                    </div>

									
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $k['city1']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>PinCode</label>
                                                <input type="number" class="form-control" placeholder="PinCode" name="pincode" value="<?php echo $k['pincode1']; ?>">
                                            </div>
                                        </div>
                                    </div>
									
									
									 <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mobile No</label>
                                                <input type="text" class="form-control" placeholder="Mob No" name="mobno" value="<?php echo $k['mobno1']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" placeholder="Password" name="password" value="<?php echo $k['password1']; ?>">
                                            </div>
                                        </div>
										
                                        
                                    </div>
												
                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="submit" value="Update Profile">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                
                            </div>
                               <div class="author">
                                     <a href="#">
                                   <img src="./../<?php echo $k['image1']; ?>" class="img-rounded" width="200px" height="150px"  /> 

                                      
                                    </a>
                                </div>
                                <p class="description text-center"> <?php echo $k['fname1']; ?><br>
                                                    <?php echo $k['city1']; ?>--<?php echo $k['pincode1']; ?> <br>
                                </p>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php include 'footer.php';?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
