<?php session_start(); 
		   if(!isset($_SESSION['uname']))
		   { header("Location:http://localhost/wonder tiffin/Admin/login.php"); }
		 
?>
<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title>Admin | BookHub</title>

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
                                <h4 class="title">Available Food</h4>
                                <p class="category">Here you can Find all available Foods Details and Block Book </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
										<th>CID</th>
										<th>NAME OF Food</th>
                                    	<th>PRICE</th>
										<th>CATEGORY</th>
										<th>STATUS</th>
										<th>BLOCK BLOCK</th>
                                    </thead>
                                    <tbody>
											<?php 
													include 'db_con.php';
													$r=mysqli_query($con,"SELECT * FROM `upload_menu` WHERE `type`='chef'");
													while($c=mysqli_fetch_assoc($r)):
													
											?>
                                        <tr>
													<td><?php echo $c['uid']; ?></td>
													<td><?php echo $c['cid']; ?></td>
													<td><?php echo $c['title']; ?></td>
													<td><?php echo $c['price']; ?></td>
													<td><?php  $r1=mysqli_query($con,"SELECT `category_name` FROM `category` where `category_id`=".$c['category']); if($c1=mysqli_fetch_assoc($r1)){echo $c1['category_name'];} ?></td>
													<td><?php echo $c['status']; ?></td>
													<td><a class="pe-7s-lock" href="block_menu.php?id=<?php echo $c['uid']; ?>&status=<?php echo $c['status']; ?> "><td>
										</tr>
										
										
											<?php endwhile;  ?>
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
