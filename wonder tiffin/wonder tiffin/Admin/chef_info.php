<?php session_start(); 
		   if(!isset($_SESSION['uname']))
		   { header("Location:http://localhost/wonder tiffin/Admin/login.php"); }
		 
?>
<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title>Admin | Wonder Tifin</title>

</head>
<body>

<div class="wrapper">

	<?php include 'Sidebar.php';?>

	<div class="main-panel">

		<?php include 'header.php';?>

		<div class="content">
				<div class="container-fluid">
						<div class="row">
								<div class="col-md-12">
										<div class="card">
												<div class="header">
														<h4 class="title">Chef Management</h4>
														<p class="category">Here you can Find all Chefs Details and Block Chefs</p>
												</div>
			<div class="content table-responsive table-full-width">
				<table class="table table-hover table-striped">
					<thead>
						<th>First Name</th>
						<th> Last Name</th>
						<th> Image </th>
						<th>Gender</th>
						<th>City</th>
						<th>Address</th>
						<th>Pincode</th>
						<th>Mobile No</th>
						<th>EmailId</th>
						<th>Password</th>
						<th>Status</th>
						<th>Type </th>
						<th>Block User</th>

					</thead>
					<tbody>
						<?php
							include 'db_con.php';
							$r=mysqli_query($con,"SELECT * FROM `member_info` WHERE type1='chef'");
							while($c=mysqli_fetch_assoc($r)):

					?>
				<tr>
					
					<td><?php echo $c['fname1']; ?></td>
					<td><?php echo $c['lname1']; ?></td>
					<td><img style="width: 50px; height: 50px" src="./../<?php echo $c['image1']; ?>" /></td>
					<td><?php echo $c['gender1']; ?></td>
					<td><?php echo $c['city1']; ?></td>
					<td><?php echo $c['address1']; ?></td>
					<td><?php echo $c['pincode1']; ?></td>
					<td><?php echo $c['mobno1']; ?></td>
					<td><?php echo $c['emailid1']; ?></td>
					<td><?php echo $c['password1']; ?></td>
					<td><?php echo $c['status']; ?></td>
					<td><?php  $k=$c['type1'];
						if($k==1)
						{ echo "cust"; }
						else
						{ echo "chef"; }
						?>
					</td>
					<td><a class="fa fa-lock" href="block_chef.php?id=<?php echo $c['cid'];?>&status=<?php echo $c['status']; ?> "></button><td>
				</tr>
					<?php endwhile; ?>
				</tbody>
				</table>

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
