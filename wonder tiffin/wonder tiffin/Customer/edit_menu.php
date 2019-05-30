<?php
		include 'db_con.php';
		$id=$_GET['id'];
?>
<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title>Edit Food Details | Customer| Wonder Tiffin</title>

</head>
<body>

<div class="wrapper">

	<?php include 'Sidebar.php'; ?>

	<div class="main-panel">

		<?php include 'header.php';
			include 'db_con.php';
			$r=mysqli_query($con,"SELECT * FROM `upload_menu` WHERE `uid`='$id'");
			while($k=mysqli_fetch_assoc($r)):
		?>

		<br />
				<div class="container-fluid">
						<div class="row">
								<div class="col-md-12">
										<div class="card">
												<div class="header">
														<h4 class="title">Edit Food</h4>
												</div>
												<div class="content">
														<form method="post"  enctype="multipart/form-data" action="edit_code.php">
																<div class="row">
																		<div class="col-md-2">
																				<div class="form-group">
																						<label>Food Id</label>
																						<input type="text" class="form-control" name="id" value="<?php echo $k['uid']; ?>" readonly="readonly">
																				</div>
																		</div>
																		<div class="col-md-3">
																				<div class="form-group">
																						<label>Food Title</label>
																						<input type="text" class="form-control" name="title" value="<?php echo $k['title']; ?>">
																				</div>
																		</div>
																		<div class="col-md-3">
																				<div class="form-group">
																						<label>Quantity</label>
																						<input type="text" class="form-control" name="quantity" value="<?php echo $k['quantity']; ?>">
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
																	
																	<div class="col-md-3">
																				<div class="form-group">
																						<label>Description</label>
																						<input type="text" class="form-control" name="desc" value="<?php echo $k['desc']; ?>">
																				</div>
																		</div>
																</div>


																<?php endwhile; ?>
																<input type="submit" class="btn btn-info btn-fill pull-right" name="submit">
																<div class="clearfix"></div>


														</form>
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
