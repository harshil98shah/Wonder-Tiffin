<?php
	session_start();
	include 'db_con.php';
	$cid=$_SESSION['cid'];
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register | Wonder Tiffin</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   
<style>
		
	@keyframes BackgroundGradient{
		
							0%{
								background-position:0% 50%;
							}
							50%{
								background-position:100% 50%;
							}
							100%{
								background-position:0% 50%;
							}
	}
</style>   
   
   
  </head>
<body>
<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" style="background:linear-gradient(132deg,#e8919c,#FA842B,#00F700);
																background-size:400% 400%;
																animation:BackgroundGradient 5s ease infinite; height:70px;">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand"  style="color:black;">WONDER TIFFIN </a>
			<?php 

			if(isset($_SESSION['uname']))
			{
				echo "<h5 style='color:black;'>WELCOME ". $_SESSION['uname'];
			} 
			?>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php" class="smoothScroll"  style="color:black;"> HOME</a></li>
				<li>
					<div class="dropdown smoothScroll" style="margin-top: 15px;">
   						 <a  data-toggle="dropdown" style="color:black;">CATEGORY
    						<span class="caret"></span></a>
    					<ul class="dropdown-menu">
      						<li><a onclick='showMenu("PUNJABI")'>PUNJABI FOOD</a></li>
     						<li><a onclick='showMenu("GUJARATI")'>GUJARATI FOOD</a></li>
      						<li><a onclick='showMenu("JAIN")'>JAIN FOOD</a></li>
      						<li><a onclick='showMenu("DIET")'>DIET FOOD</a></li>
      						<li><a onclick='showMenu("JUNK")'>JUNK FOOD</a></li>
      						
    					</ul>
  					</div>

				</li>
  				<li><a href="#chefs" class="smoothScroll"  style="color:black;">CHEFS</a></li>
  				<li><a href="#feedback" class="smoothScroll"  style="color:black;">FEEDBACK</a></li>
				<li><a href="#contact" class="smoothScroll"  style="color:black;">CONTACT</a></li>

			
			
				<!-- customer can upload menu-->
				
			<?php
				if(isset($_SESSION['cid']))
				{
					echo  "<li>
					<a href='Customer/upload.php' class='btn pull-right' style='margin-top: -8px; color:black;'><h5>UPLOAD MENU</h5></a>
					</li>";
				}
				else 
				{
					 "<li>
					<a href='login1.php' class='btn  pull-right' style='margin-top: -8px; color:black;'><h5>UPLOAD MENU</h5></a>
					</li>";
				}
			?>	
			<!-- cart info -->
			
			<?php
				$cid=0;
				if(isset($_SESSION['cid']))
				{
					$cid=$_SESSION['cid'];
	
				}	
				if(isset($_SESSION['cid']))
				{
					echo "<li> <a href='product_summary1.php' style='margin-top: -7px; color:black;'><h5>CART</h5></a> </li>";
				}		
				else
				{
					"<li> <a id='myCart' href='login1.php'  style='margin-top:-7px; color:black;'<h5>CART</h5></a> </li>";
				}
			?>
			
			<?php if(isset($_SESSION['uname'])){

				if(!$_SESSION['uname'])
				{
					?> <li><a href="login1.php"  style="color:black;"> LOGIN</a></li>
				<?php }else{
					?> <li><a href="logout.php"  style="color:black;"> LOGOUT</a></li>
			 	<?php }
			 	} else{
			 		 ?> <li><a href="login1.php"  style="color:black;"> LOGIN</a></li>
			 	<?php }

			?>
				
			</ul>
		</div>
	</div>
</section>
  

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	
<!-- Sidebar end=============================================== -->
	<div class="span9" style="text-align: center;">
   
	<h3 style=" margin-top: 10%; margin-bottom: 7%;">Shopping Cart </h3>
  <div class="container">
  	<div class="row">
 
	<div class="col-sm-12" style="text-align: center;">
	<form action="qun.php" method="post">
	<table class="table table-bordered table-hover" style="text-align: center;">
              <tr>
                  <th>Cart_id</th>
                  <th>Food Name</th>
                  <th>Quantity</th>
				  <th>Price</th>
                  <th>Total</th>
				  <th>Option</th>
				  
			 </tr>
                
              
<?php
		$tot=0;
		$sql="SELECT * FROM `cart_info` WHERE `cid`='$cid'";
		$r=mysqli_query($con,$sql);
		while($res=mysqli_fetch_assoc($r)):
		$cart_id[]=$res['cart_id'];								
?>
			<tr>
                  <th><?php echo $res['cart_id']; ?></th>
                  <th><?php echo $res['title']; ?></th>
                  <th><input type="number" name='qun["<?php echo $res['cart_id'];?>"]' value="<?php echo $res['qty'];?>"></th>
				  <th><?php echo $res['price']; ?></th>
                  <th><?php echo $res['total']; ?></th>
				  <th><a href="delete_cart.php?id=<?php echo $res['cart_id']; ?>" class="btn btn-danger">Delete</a></th>
				  <?php   
						$tot = $tot + $res['total'];
				  ?>
				  
			 </tr>
		<?php  endwhile;?>
						
							<td colspan="2"></td>
							<td><input type="submit" name="qty" value="update" class="btn btn-success"></td>
							<td>
							<h4>Total:</h4>
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							<td></td>
			</table>							
							<center>
							<?php
							$x=mysqli_num_rows($r);
							if($x==0)
							{
								echo "<script>alert('Your Cart is Empty...')</script>";
							}
							?>
								<a href="order.php" class="btn btn-info pull-right"> Confirm & Proceed -></a>
								<a href="index.php" class="btn btn-info pull-left"> <- Continue Shopping </a>
        </form>    
      </div>
    </div>
    </div>
	
	<!--<a href="login.php" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>-->

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
