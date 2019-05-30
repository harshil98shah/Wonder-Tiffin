<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';
	session_start();
	$cid=$_SESSION['cid'];
	?>
	<title>Upload Menu | Admin | Wonder Tiffin</title>

</head>
<body>

<div class="wrapper">

	<?php include 'Sidebar.php';?>

	<div class="main-panel">

		<?php include 'header.php';?>

		<br />
				<div class="container-fluid">
						<div class="row">
								<div class="col-md-12">
										<div class="card">
												<div class="header">
														<h4 class="title">Upload Menu</h4>
												</div>
												<div class="content">
														<form method="post"  action="upload_menu.php" enctype="multipart/form-data">
																<div class="row">
																		<div class="col-md-5">
																				<div class="form-group">
																						<label>Food Title</label>
																						<input type="text" class="form-control" name="title">
																				</div>
																		</div>
																
																		<div class="col-md-5">
																				<div class="form-group">
																						<label>Quantity</label>
																						<input type="text" class="form-control" name="quantity">
																				</div>
																		</div>
																</div>

																

																<div class="row">
																		<div class="col-md-4">
																				<div class="form-group">
																						<label>Category</label>
																						<select class="form-control" id="book_category" name="category">
																						<?php
																							include 'db_con.php';
																							$r=mysqli_query($con,"SELECT * FROM `category`");
																							while($c=mysqli_fetch_assoc($r)):
																						?>
																							<option value="<?php echo $c['category_id']; ?>"><?php echo $c['category_name']; ?></option>
																						<?php endwhile; ?>
    																				</select>
																				</div>
																		</div>
																		
																</div>
																<div class="row">
																			<div class="col-md-13">
																				<div class="form-group">
																						<label>Food Description</label>
																						<input type="text" class="form-control" name="desc">
																				</div>
																		</div>
																<div>
																<input type="submit" class="btn btn-info btn-fill pull-right" name="submit">
																<div class="clearfix"></div>
														</form>
												</div>
										</div>
								</div>
						</div>
				</div>
			</div>
		</div>





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
