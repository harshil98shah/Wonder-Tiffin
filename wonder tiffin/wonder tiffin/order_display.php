<?php 
   ob_start();
    session_start();
	$k=$_GET['k'];
	$j=$_GET['j'];
	if($k==0)
	{echo "<script>alert('Your Order Registered Sucessfully.....')</script>";}
					$i=$_GET['i'];
					if($i==1)
					{
						echo "<script>alert('Your Order has been Cancel..')</script>";
					}
	if($j==1)
	{echo "<script>alert('Problem Occuring in Delete Order..')</script>";}
	$cid=$_SESSION['cid'];
	include 'db_con.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>

   

    <title>Register | Wonder Tiffin</title>

  </head>
<body>


<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	
<!-- Sidebar end=============================================== -->
	<div class="span9">
    
	<h3>Order Registered</h3>
	<hr class="soft"/>
	<?php
			$sql="SELECT * FROM `order_info` WHERE `cid`='$cid'";
			$r=mysqli_query($con,$sql);
				$k=mysqli_fetch_assoc($r);
				$c=$k['order_id'];
	?>
	<div class="row">
		<form action="process_cart1.php" method="POST">
							<table width="100%" border="0">
							<tr>
									<td><b>Name:</b><?php echo $k['title'];?></td>	
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></td></tr>
							<tr>
									<td colspan="3"><b>Email_id:</b><?php echo $k['emailid'];?></td>	
									<td><b>Pincode:</b><?php echo $k['pincode'];?></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></td></tr>
							<tr>    <td><b>Address:</b><?php echo $k['billing_address'];?></td></tr>
							<tr><td colspan="7"><hr style="border:0.5px Solid #a1a1a1"></td></tr>
								<tr align="left">
									<th> No</th>
									<th> Product</th>
									<th> Qty</th>
									<th> Price</th>
									<th> Total</th>
									
								</tr>
								<?php
								
									$tot=0;
									$i=1;
									$sql="SELECT * FROM `cart_info` WHERE `cid`='$cid'";
									$r=mysqli_query($con,$sql);
									while($res=mysqli_fetch_assoc($r)):
									
										
								?>
							<tr><td colspan="7"><hr style="border:0.5px Solid #a1a1a1;"></td></tr>
							<tr >
									<td><?php echo $i; ?></td>
									<td><?php echo $res['title']; ?> </td>
									<td><?php echo $res['qty']; ?></td>
									<td><?php echo $res['price']; ?></td>
									<td> <?php echo $res['total']; ?></td>	
								</tr>
								<?php $tot = $tot + $res['total'];
								$i=$i+1;
								
									endwhile;
									
									
								?>
							<tr><td colspan="7"><hr style="border:0.5px Solid #a1a1a1;"></td></tr>
							<tr>
							<td colspan="3" align="right">
							<h3>Total:</h3>
							
							</td>
							<td> <h3><?php echo $tot; ?> </h3></td>
							</tr>
							<tr><td colspan="7"><hr style="border:0.5px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							<a href="cancel_order.php?id=<?php echo $c; ?>" class="btn btn-info pull-left"> Delete Order </a>
							<a href="index.php" class="btn btn-info pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a>
							
							</center>
							</form>
	</div>
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>

	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>

<span id="themesBtn"></span>
</body>
</html>
<?php

$sql="DELETE FROM `cart_info` WHERE `cid`='$cid'";
mysqli_query($con,$sql);
?>