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
														<h4 class="title">Upload Menu Management</h4>
														<p class="category">Here you can Find all Upload Menu Details </p>
												</div>
		<div class="content table-responsive table-full-width">
			<table class="table table-hover table-striped">
				<thead>
						<th>Title</th>										
						<th>Price</th>										
																
						<th>Category</th>										
						<th>Image</th>
						<th>Description</th>
						<th>Status</th>
						<th>Block</th>
				</thead>
					<tbody>
						 <?php
								include 'db_con.php';
								$r=mysqli_query($con,"SELECT * FROM `upload_menu` where type='chef'");
								
								while($c=mysqli_fetch_assoc($r)):

						?>
						<tr>
							<td><?php echo $c['title']; ?></td>
							<td><?php echo $c['price']; ?></td>
							
							<td><?php  $r1=mysqli_query($con,"SELECT `category_name` FROM `category` where `category_id`=".$c['category']); if($c1=mysqli_fetch_assoc($r1)){echo $c1['category_name'];} ?></td>
							<td><?php echo $c['image']; ?></td>
							<td><?php echo $c['desc']; ?></td>
							<td><?php echo $c['status']; ?></td>
							<td><a class="fa fa-lock" href="block_umenu.php?id=<?php echo $c['uid'];?>&status=<?php echo $c['status']; ?> "></button><td>
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
