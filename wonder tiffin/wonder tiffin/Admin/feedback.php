<?php session_start(); 
		   if(!isset($_SESSION['uname']))
		   { header("Location:http://localhost/wonder tiffin/Admin/index.php"); }
		 
?>
<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title>Admin | Wonder tifin </title>

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
                                <h4 class="title">Customer FeedBack</h4>
                                <p class="category">Here you can see all user Feedback about This Website and its Services.</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th>ID</th>
									  <th>CID</th>
                                    	<th>Email ID</th>
										<th>Feedback Message</th>
										<th>Status</th>
										<th>Block FeedBack</th>
                                    </thead>
                                    <tbody>
											<?php 
													include 'db_con.php';
													$r=mysqli_query($con,"SELECT * FROM `feedback`");
													while($c=mysqli_fetch_assoc($r)):
													
											?>
                                        <tr>
                                        	<td><?php echo $c['feedback_id']; ?></td>
											<td><?php echo $c['cid']; ?> </td>
											<td><?php echo $c['email_id']; ?></td>
											<td><?php echo $c['msg']; ?></td>
											<td><?php echo $c['status']; ?></td>
											<td><a class="pe-7s-lock" href="block_feedback.php?id=<?php echo $c['feedback_id']; ?>&status=<?php echo $c['status']; ?>"></button><td>
                                        </tr>
										<?php endwhile;  ?>
                                    </tbody>
                                </table>

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
