<?php


$cid=0;
if(isset($_SESSION['status']))
			{
				$cid=$_SESSION['cid'];				
			}		
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	
	<title>Register | The Wonder Tiffin</title>

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
			<?php session_start();

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
	<div class="span9">
    
<?php
					include 'db_con.php';
					if(isset($_GET['id']))
					{	
					$id=$_GET['id'];
					$sql = "SELECT * FROM `upload_menu` WHERE `uid`='$id'";
					
					$k = mysqli_query($con,$sql);
					
					$s=mysqli_fetch_assoc($k);
					//var_dump($s);
					}
					
?>	
	<div class="col-sm-12">
			<div  class="span3">
				<center><img src="<?php echo $s['image']; ?>" style="width:500px; height: 300px; margin-top: 10%;
    margin-bottom: 7%;"  class="img-thumbnail">  </center>          
			<div class="span6">
				<center><h3><?php echo $s['title']; ?> </h3></center>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<div class="controls">
						<label class="control-label"><span><b>Price:</b><?php echo $s['price']; ?></span></label>
						<a href="process_cart1.php?id=<?php echo $s['uid'] ; ?>" class="btn btn-primary btn-md  pull-right "><i class="pe-7s-cart">Add to cart</i></a>
			  
					</div>
				  </div>
				</form>

				<hr class="soft"/>
				<p><b>Description:</b>
				<?php echo $s['desc']; ?>
				</p>
				
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>
		
		</div>
          </div>
		  
		  
		  
		  
		  

	</div>
</div>
</div> 
</div>
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
