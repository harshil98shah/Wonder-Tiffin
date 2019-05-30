


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>



input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: orange;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: blue;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    margin-left: 50px;
    margin-top: 0px;
}

img.avatar {
    height: 200px;
    width: 200px;
    border-radius: 50%;
    
}
p
{
  margin-left: 100px;
  font-size: 20px;
  font-family: Arial, Helvetica, sans-serif;
  font-style: italic; 
}


.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}



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
<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	
	
</head>
<body>
<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" style="height:15%; margin-top:-13px; background:linear-gradient(132deg,#e8919c,#FA842B,#00F700);
																background-size:400% 400%;
																animation:BackgroundGradient 5s ease infinite; height:85px;">
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
				<li><a href="index.php" class="smoothScroll" style="color:black;"> HOME</a></li>
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
  				<li><a href="#chefs" class="smoothScroll" style="color:black;">CHEFS</a></li>
  				<li><a href="#feedback" class="smoothScroll" style="color:black;">FEEDBACK</a></li>
				<li><a href="#contact" class="smoothScroll" style="color:black;">CONTACT</a></li>

			
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


<div class="container">
     <div class="row">
          <h2 style="text-align: center; margin-top: 10%; margin-bottom: 4%;">Shipping Details </h2>

           <form class="form-group" action="order_add.php" method="post">

                <div class="col-sm-12">
                        <label><b>Name</b></label>
                    <input  type="text" placeholder="Enter  Name" name="fname" required>
                </div>
                 
                <div class="col-sm-12">
                    <label><b>Billing Address</b></label>
                    <input type="text" placeholder="Enter Billing Address" name="billadd" required>
                </div>   

                <div class="col-sm-12">
                    <label><b>Pincode</b></label></br>
                     <input type="text" placeholder="Enter Pincode" name="pin" required>
                </div>

                <div class="col-sm-12">
                     <label><b>Mobile No.</b></label>
                     <input type="text" placeholder="Enter Mobile No" name="mobno" required>
                </div>

                <div class="col-sm-12">
                     <label><b>City</b></label>
                     <input type="text"  name="city" value="Kalol" readonly="readonly">
                </div>
				<div class="col-sm-12">
					<label><b>Area</b></label>
				<select name="area" class="col-sm-12" style="height:40px;">
					<option value="panchvati Area" selected>panchvati Area </option>
					<option value="Navjivan Road">Navjivan Road</option>
					<option value="Juna Chora">Juna Chora</option>
					<option value="Tower Chok">Tower Chok</option>
				</select>
				</div>
				&nbsp &nbsp
                <div class="col-sm-12">
                      <label><b>Email Id </b></label>
                      <input type="text" placeholder="Enter Email Id" name="emailid" required>
                </div>
				
               <center>  <input  type="submit" class="btn btn-primary" style="width:20%;" value="order" name="order"> </input></center>
     
  
</form>
          
     </div>
</div>


</body>
</html>



