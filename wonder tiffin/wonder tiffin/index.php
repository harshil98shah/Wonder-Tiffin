<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> WONDER TIFFIN </title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>

	<script>

$( document ).ready(function() {
   
   	//alert("hiii");
	//$("#output2").hide();
});



function showMenu($itemname,$cid) {

	$("#output1").html("");
	$("#output2").html("");
	

	$.ajax({
			type: "get",
			url: "punjabimenu.php",
			data: "item_name="+$cid,
			cache: false,
			
			success: function(data) { 
				$("#output1").html( data );
				
			},


			error: function(){
    			alert('failure');
  			}
		});

	$.ajax({
			type: "get",
			url: "punjabimenuimg.php",
			data: "item_name="+$cid,
			cache: false,
			
			success: function(data) { 
				$("#output2").html("");
				$("#output2").html(data);
				

			},

			error: function(){
    			alert('failure');
  			}
		});
	

}

</script>
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

<!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" style="background:linear-gradient(132deg,#e8919c,#FA842B,#00F700);
																background-size:400% 400%;
																animation:BackgroundGradient 5s ease infinite; height:65px;">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a class="navbar-brand"  style="color:black;">WONDER TIFFIN </a>
			
			<?php session_start();

			if(isset($_SESSION['uname']))
			{
				echo "<h5 style='color:black;'>WELCOME ". $_SESSION['uname'];
			} 
			?>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" style="color:black;"> HOME</a></li>
				<li>
					<div class="dropdown" style="margin-top: 15px;">
   						 <a  data-toggle="dropdown" style="color:black;">CATEGORY
    						<span class="caret"></span></a>
    					<ul class="dropdown-menu">
      						<li><a onclick='showMenu("PUNJABI",1)'>PUNJABI FOOD</a></li>
     						<li><a onclick='showMenu("GUJARATI",2)'>GUJARATI FOOD</a></li>
      						<li><a onclick='showMenu("JAIN",3)'>JAIN FOOD</a></li>
      						<li><a onclick='showMenu("DIET",4)'>DIET FOOD</a></li>
      						<li><a onclick='showMenu("JUNK",5)'>JUNK FOOD</a></li>
      						
    					</ul>
  					</div>

				</li>
  				<li><a href="#chef"  style="color:black;">CHEF</a></li>
  				<li><a href="#feedback" style="color:black;">FEEDBACK</a></li>
				<li><a href="#contact"  style="color:black;">CONTACT</a></li>

			
			
				<!-- customer can upload menu-->
				
			<?php
				if(isset($_SESSION['cid']))
				{
					echo  "<li >
					<a  href='Customer/upload.php' class='btn btn-large pull-right' style='margin-top: -5px; color:black;'><h5>UPLOAD MENU</h5></a>
					</li>";
				}
				else 
				{
					 "<li>
					<a href='login1.php' class='btn btn-large pull-right' style='margin-top: -5px; color:black;'><h5>UPLOAD MENU</h5></a>
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
					echo "<li> <a href='product_summary1.php' style='margin-top: -5px; color:black;'><h5>CART</h5></a> </li>";
				}		
				else
				{
					echo "<li> <a id='myCart' href='login1.php'  style='margin-top:-5px; color:black;'><h5>CART</h5></a> </li>";
				}
			?>
			
			<?php if(isset($_SESSION['uname']))
			{

				if(!$_SESSION['uname'])
				{
					?> <li><a href="login1.php" style="color:black;"> LOGIN</a></li>
				<?php }else{
					?> <li><a href="logout.php" style="color:black;"> LOGOUT</a></li>
			 	<?php }
			 	} else{
			 		 ?> <li><a href="login1.php" style="color:black;"> LOGIN</a></li>
			 	<?php }

			?>
			
	
				
			</ul>
		</div>
	</div>
</section>


<!-- home section -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1></h1>
				<h2></h2>
			</div>
		</div>
	</div>		
</section>


<!-- gallery section -->
<section id="gallery" class="parallax-section">
<div class="container" >
	<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 style="color:#feb308; font-size:30px;" class="heading">Gallery</h1>
				<hr>
			</div>
			
			
			
			
<?php

	include "db_con.php";

	$sql=mysqli_query($con,"SELECT uid,title,image,price FROM `upload_menu` where status='Active' AND type='chef'");
	//$row=mysqli_fetch_array($sql);
	//var_dump($row);
	while ($row=mysqli_fetch_array($sql)) 
	{
		$path=$row['image'];
?>
	<div id="output2">

		<!--<div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.3s">
			<div class="thumbnail">
				<img src="<?php echo $path; ?>" style="width:300px; height:190px">
					<div class="caption">
						<center><h3 style="color:#1f3057"><?php echo $row['title'];?></h3></center>&nbsp &nbsp
						<span><h4 style="color:#f24816">Price:<?php echo $row['price'];?><span></h4>
					</div>
			</div>
				
		</div>-->
				
	</div>
	
	<?php } ?>
	</div>
</div>
</section>


<!-- menu section
<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 style="color:#feb308;  font-size:30px;" class="heading">SPECIAL MENU</h1>
				<hr>
			</div>
<?php
	include "db_con.php";

	$sql=mysqli_query($con, "SELECT uid,title FROM `upload_menu` where status='Active' AND type='chef'");
	//$row=mysqli_fetch_array($sql);
	//var_dump($row);
	while ($row=mysqli_fetch_array($sql)) 
	{
?>
		<div id="output1">

			<div style="color: #F7F9EF" class="col-md-6 col-sm-6  wow fadeInUp" data-wow-delay="0.9s">
				<h2><?php
				$foodtitle=$row['title'];

				echo $row['title'];?> 
				<h4><a class="btn btn-primary" href="product_details1.php?id=<?php echo $row['uid']; ?>">VIEW</a></h2>
			</div>
		</div>
		<?php } ?>
		</div>
	</div>
</section>-->


<!-- team section -->
<section id="chef" class="parallax-section">
	<div  class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 style="color:#feb308;  font-size:30px;" class="heading"> MEET OUR CHEFS</h1>
				<hr>
			</div>

<?php 
	include "db_con.php";

	$sql=mysqli_query($con, "SELECT image1,fname1,mobno1 FROM `member_info` WHERE status='Active'  AND type1='chef'");
	//$row=mysqli_fetch_array($sql);
	//var_dump($row);
	while ($row=mysqli_fetch_array($sql)) 
	{
	
	//$img=$row['image1'];

?>
			
			<div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.3s">
				<div class="thumbnail">
					<h6><img style="width: 250px; height: 250px;" class="img-thumbnail" src="<?php echo  $row['image1']; ?>"> </h6>
				
					<div class="caption">
						<h4  style="color:black;"><?php echo $row['fname1'];?></h4>
						<h4  style="color:black;"><?php echo $row['mobno1']; ?></h4>
					</div>
				</div>
			</div>
			
<?php } ?>
		</div>
	</div>
</section>


<!-- feedback section -->

<section id="feedback" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 style="color:#feb308;  font-size:30px;" class="heading">FeedBack Form</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.3s">
				<form action="feedback1.php" method="post">
					<div class="col-md-6 col-sm-6">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name">
				  </div>
					<div class="col-md-6 col-sm-6">
						<input name="email" type="email" class="form-control" id="email_id" placeholder="Email">
				  </div>
					<div class="col-md-12 col-sm-12">
						<textarea name="message" rows="8" class="form-control" id="msg" placeholder="Message"></textarea>
					</div>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<!-- contact section -->
<footer id="contact" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 style="color:#feb308;  font-size:30px;" class="heading">Contact Info.</h2>
				
				<div class="ph">
					<p style="color: white;"><i class="fa fa-phone"></i> Phone</p>
					<h4>9586095789</h4>
				</div>
				<div class="address">
					<p  style="color: white;"><i class="fa fa-map-marker"></i> Our Location</p>
					<h4>47 Shreeji Nivas Vardhman Nagar Kalol(N.G)-382721</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 style="color:#feb308;  font-size:30px;" class="heading">Open Hours</h2>
					
					<p style="color: white;">Mon-Sat <span>6:00 AM - 9:00 PM</span></p>
					
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 style="color:#feb308;  font-size:30px;"  class="heading">Follow Us</h2>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.3s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<!-- copyright section -->
<section id="copyright"  style="background:linear-gradient(132deg,#e8919c,#FA842B,#00F700);
																background-size:400% 400%;
																animation:BackgroundGradient 5s ease infinite; height:65px;">
	<div class="container" style="margin-top:-30px;">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<h3>TIFFIN SERVICES</h3>
				<p>Copyright © Tiffin Services 
                
            </div>
		 <div class="row">
			<div class="col-md-6 col-sm-6">
		<h3>ACCOUNT</h3>
			<a href="login1.php"><h5>REGISTRATION</h5></a> 
	   </div>
     </div>
		</div>
	</div>
</section>

<!-- JAVASCRIPT JS FILES -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
 <div class="modal fade popup-cart" id="popup-cart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="row" style="">
             <div class="col-sm-8">
                <div class="ca" style="background-color: white; float: right;">
                    <div class="cart-items-inner">
                          <?php
                            $c_id=$_SESSION['cid'];
                                $qry="SELECT * FROM cart_info  WHERE  cid=$c_id ";
                                $total=0;
                                 $rs=mysqli_query($con,$qry);
                              while($row=mysqli_fetch_assoc($rs))
                               {
                          ?>
                        <div class="media">
                                 <?php
                                   $uid=$row['uid'];
                                    $qry1="SELECT * FROM upload_menu  WHERE uid=$uid";
                                    $rs1=mysqli_query($con,$qry1);
                                    $row1=mysqli_fetch_assoc($rs1);
                                    $path1=$row1['image'];
                                  ?>
                            <a class="pull-left" href="#"><img class="media-object item-image" src="<?php echo $path1;?>" width=200px; height=100px; alt=""></a>
                            
                            

                            <div class="">
                                <h4 class=""><a href="#"><?php echo $row['title']; ?></a></h4>
                                <p class=""><?php echo $row['price']; ?></p>
                            </div>
                            
                        </div>
                          <?php
                              
                               }
                          ?>
                       
                        <div class="media">
                            <div class="media-body">
                                <div>
                                    <a href="" class="btn btn-theme btn-theme-dark" data-dismiss="modal">Close</a>
                                    <a href="" class="btn btn-theme btn-theme-transparent btn-call-checkout">Checkout</a>
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
</html>